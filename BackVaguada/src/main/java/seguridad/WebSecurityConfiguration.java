package seguridad;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.http.HttpMethod;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.authentication.ProviderManager;
import org.springframework.security.authentication.dao.DaoAuthenticationProvider;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configurers.oauth2.server.resource.OAuth2ResourceServerConfigurer;
import org.springframework.security.config.http.SessionCreationPolicy;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.security.oauth2.jwt.JwtDecoder;
import org.springframework.security.oauth2.jwt.JwtEncoder;
import org.springframework.security.oauth2.jwt.NimbusJwtDecoder;
import org.springframework.security.oauth2.jwt.NimbusJwtEncoder;
import org.springframework.security.oauth2.server.resource.authentication.JwtAuthenticationConverter;
import org.springframework.security.oauth2.server.resource.authentication.JwtGrantedAuthoritiesConverter;
import org.springframework.security.web.SecurityFilterChain;

import com.nimbusds.jose.jwk.JWK;
import com.nimbusds.jose.jwk.JWKSet;
import com.nimbusds.jose.jwk.RSAKey;
import com.nimbusds.jose.jwk.source.ImmutableJWKSet;
import com.nimbusds.jose.jwk.source.JWKSource;
import com.nimbusds.jose.proc.SecurityContext;

import utilidades.RSAKeyProperties;

@Configuration
public class WebSecurityConfiguration {
	private final RSAKeyProperties keys;

	public WebSecurityConfiguration(RSAKeyProperties keys) {
		this.keys = keys;
	}

	@Bean
	public PasswordEncoder passwordEncoder() {
		return new BCryptPasswordEncoder();
	}

	@Bean
	public AuthenticationManager authManager(UserDetailsService detailsService) {
		DaoAuthenticationProvider daoProvider = new DaoAuthenticationProvider();
		daoProvider.setUserDetailsService(detailsService);
		daoProvider.setPasswordEncoder(passwordEncoder());
		return new ProviderManager(daoProvider);
	}

	@Bean
	public SecurityFilterChain filterChain(HttpSecurity http) throws Exception {
		http.csrf(csrf -> csrf.disable()).authorizeHttpRequests(auth -> {
			auth.requestMatchers("/carrito/**").hasRole("USER");
			auth.requestMatchers("productos/guadar").hasRole("ADMIN");
			auth.requestMatchers("productos/modificar").hasRole("ADMIN");
			auth.requestMatchers(HttpMethod.DELETE,"productos/{id}").hasRole("ADMIN");
			auth.requestMatchers("/**").permitAll();
//			auth.requestMatchers("/admin/**").hasRole("ADMIN");
			auth.anyRequest().authenticated();
		});
		http.oauth2ResourceServer().jwt().jwtAuthenticationConverter(jwtAuthenticationConverter());
		http.sessionManagement(session -> session.sessionCreationPolicy(SessionCreationPolicy.STATELESS));
		return http.build();

	}

	@Bean
	public JwtDecoder jwtDecoder() {

		return NimbusJwtDecoder.withPublicKey(keys.getPublicKey()).build();
	}

	@Bean
	public JwtEncoder jwtEncoder() {
		JWK jwk = new RSAKey.Builder(keys.getPublicKey()).privateKey(keys.getPrivateKey()).build();
		JWKSource<SecurityContext> jwks = new ImmutableJWKSet<>(new JWKSet(jwk));
		return new NimbusJwtEncoder(jwks);
	}

	@Bean
	public JwtAuthenticationConverter jwtAuthenticationConverter() {
		JwtGrantedAuthoritiesConverter jwtGrantedAuthoritiesConverter = new JwtGrantedAuthoritiesConverter();
		jwtGrantedAuthoritiesConverter.setAuthoritiesClaimName("roles");// referencia a TokenService
		jwtGrantedAuthoritiesConverter.setAuthorityPrefix("ROLE_");// Spring busca los roles con el formato role_admin
																	// para desencriptar
		JwtAuthenticationConverter jwtConverter = new JwtAuthenticationConverter();
		jwtConverter.setJwtGrantedAuthoritiesConverter(jwtGrantedAuthoritiesConverter);// genera un nuevo token con los
																						// roles bien hechos
		return jwtConverter;
	}

}

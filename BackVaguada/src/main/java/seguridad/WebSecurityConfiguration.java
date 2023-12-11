package seguridad;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.authentication.ProviderManager;
import org.springframework.security.authentication.dao.DaoAuthenticationProvider;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.security.web.SecurityFilterChain;



@Configuration
public class WebSecurityConfiguration {

//    @Autowired
//    private UserDetailsService userDetailsService;

//    @Bean
//    AuthenticationProvider authenticationProvider() {
//        DaoAuthenticationProvider provider
//                 = new DaoAuthenticationProvider();
//        provider.setUserDetailsService(userDetailsService);
//        provider.setPasswordEncoder(new BCryptPasswordEncoder());
//        return  provider;
//    }

	@Bean
	public PasswordEncoder passwordEncoder() {
		return new BCryptPasswordEncoder();
	}
	@Bean
	public AuthenticationManager authManager(UserDetailsService detailsService) {
		DaoAuthenticationProvider daoProvider = new DaoAuthenticationProvider();
		daoProvider.setUserDetailsService(detailsService);
		return new ProviderManager(daoProvider);
	}
    @Bean
	public SecurityFilterChain filterChain(HttpSecurity http) throws Exception{
    			return http
    					.csrf(csrf -> csrf.disable())
    					.authorizeHttpRequests(auth -> auth.anyRequest().authenticated())
    					.httpBasic().and()
    					.build();


	}
}

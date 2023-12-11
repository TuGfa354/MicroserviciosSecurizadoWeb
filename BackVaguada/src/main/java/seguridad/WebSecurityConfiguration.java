//package seguridad;
//
//import org.springframework.beans.factory.annotation.Autowired;
//import org.springframework.context.annotation.Bean;
//import org.springframework.context.annotation.Configuration;
//import org.springframework.http.HttpMethod;
//import org.springframework.security.authentication.AuthenticationProvider;
//import org.springframework.security.authentication.dao.DaoAuthenticationProvider;
//import org.springframework.security.config.Customizer;
//import org.springframework.security.config.annotation.web.builders.HttpSecurity;
//import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
//import org.springframework.security.core.userdetails.UserDetailsService;
//import org.springframework.security.crypto.bcrypt.BCryptPasswordEncoder;
//import org.springframework.security.web.SecurityFilterChain;
//
//@Configuration
//@EnableWebSecurity
//public class WebSecurityConfiguration {
//
//    @Autowired
//    private UserDetailsService userDetailsService;
//
//    @Bean
//    AuthenticationProvider authenticationProvider() {
//        DaoAuthenticationProvider provider
//                 = new DaoAuthenticationProvider();
//        provider.setUserDetailsService(userDetailsService);
//        provider.setPasswordEncoder(new BCryptPasswordEncoder());
//        return  provider;
//    }
//
//    @Bean
//	public SecurityFilterChain filterChain(HttpSecurity http) throws Exception{
//		http.csrf(cus->cus.disable())
//		.authorizeHttpRequests(aut->
//			aut.requestMatchers(HttpMethod.POST,"/contactos").hasRole("ADMIN")
//			.requestMatchers(HttpMethod.DELETE,"/contactos/**").hasAnyRole("ADMIN","OPERATOR")
//			.requestMatchers("/contactos").authenticated()
//			.anyRequest().permitAll()
//			)
//		.httpBasic(Customizer.withDefaults());//Tipo de autenticación seleccionadada
//		return http.build();
//	}
//}

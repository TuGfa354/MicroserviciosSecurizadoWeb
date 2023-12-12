package com.vaguada.main;

import java.util.HashSet;
import java.util.Set;

import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.domain.EntityScan;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;
import org.springframework.security.crypto.password.PasswordEncoder;


import model.User;

@ComponentScan(basePackages = {"controller","dao","service","com.vaguada.main", "seguridad", "utilidades"})
@EntityScan(basePackages = {"model"})
@EnableJpaRepositories(basePackages = {"dao"})
@SpringBootApplication
public class BackVaguadaApplication {

	public static void main(String[] args) {
		SpringApplication.run(BackVaguadaApplication.class, args);
	}

//	@Bean
//	CommandLineRunner run(RoleDaoImpl roleRepository, UserDaoImpl userRepository, PasswordEncoder passwordEncode){
//		return args ->{
//			if(roleRepository.findByAuthority("ADMIN").isPresent()) return;
//			System.out.println("No se encuentra admimn");
////			Role adminRole = roleRepository.guardarRole(new Role("ADMIN"));
////			roleRepository.guardarRole(adminRole);
////
////			Set<Role> roles = new HashSet<>();
////			roles.add(adminRole);
////
////			User admin = new User(1, "admin", passwordEncode.encode("password"), roles);
////
////			userRepository.guardarUser(admin);
//		};
//	}
}

package com.vaguada.main;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.autoconfigure.domain.EntityScan;
import org.springframework.context.annotation.ComponentScan;
import org.springframework.data.jpa.repository.config.EnableJpaRepositories;

@ComponentScan(basePackages = {"controller","dao","service","com.vaguada.main"})
@EntityScan(basePackages = {"model"})
@EnableJpaRepositories(basePackages = {"dao"})
@SpringBootApplication
public class BackVaguadaApplication {

	public static void main(String[] args) {
		SpringApplication.run(BackVaguadaApplication.class, args);
	}

}

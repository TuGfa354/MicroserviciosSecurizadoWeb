package controller;

import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import model.LoginDto;
import model.RegistrationDto;
import model.User;
import service.AuthenticationService;

@RequestMapping("/user")
@CrossOrigin(origins = "*") // permite recibir peticiones desde cualquier origen
@RestController

public class UserController {


	@Autowired
	AuthenticationService auService;


	@PostMapping(value = "/register", consumes=MediaType.APPLICATION_JSON_VALUE)
	public User registrarUsuario(@RequestBody RegistrationDto body) {
		return auService.registrarUsuario(body.getUsername(), body.getPassword());
	}
	@PostMapping(value = "/login",consumes=MediaType.APPLICATION_JSON_VALUE)
	public LoginDto iniciarUsuario(@RequestBody RegistrationDto body) {
		return auService.loginUsuario(body.getUsername(), body.getPassword());
	}
}

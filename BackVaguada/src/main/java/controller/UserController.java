package controller;

import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import model.LoginDto;
import model.User;
import service.AuthenticationService;
import service.UserService;

@RequestMapping("/user")
@CrossOrigin(origins = "*") // permite recibir peticiones desde cualquier origen
@RestController

public class UserController {

	@Autowired
	UserService service1;
	@Autowired
	AuthenticationService auService;

	@GetMapping(value = "/{username}")
	public Optional<User> buscarUsuario(@PathVariable("username") String username) {
		return service1.findByUsername(username);
	}

	@PostMapping(value = "/register")
	public boolean registrarUsuario(@RequestBody User body) {
		return auService.registrarUsuario(body.getUsername(), body.getPassword());
	}
	@PostMapping(value = "/login")
	public LoginDto iniciarUsuario(@RequestBody User body) {
		return auService.loginUsuario(body.getUsername(), body.getPassword());
	}
}

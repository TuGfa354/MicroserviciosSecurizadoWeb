package controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import model.Producto;
import model.User;
import service.UserService;
@RequestMapping("/user")
@CrossOrigin(origins = "*") //permite recibir peticiones desde cualquier origen
@RestController

public class UserController {
	@Autowired
	UserService service1;
	@GetMapping(value="/{username}")
	public Optional<User> listarProductos(@PathVariable("username") String username) {
		return service1.findByUsername(username);
	}
}

package controller;

import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RequestMapping("/carrito")
@CrossOrigin(origins = "*") //permite recibir peticiones desde cualquier origen
@RestController
public class CarritoController {

}

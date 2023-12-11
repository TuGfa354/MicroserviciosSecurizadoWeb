package controller;

import java.util.List;
import java.util.Set;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import model.Preparacion;
import service.PreparacionService;
@RequestMapping("/preparacion")
@CrossOrigin(origins = "*") //permite recibir peticiones desde cualquier origen
@RestController

public class PreparacionController {
	@Autowired
	PreparacionService service2;
	@PostMapping(value="/guardar",consumes=MediaType.APPLICATION_JSON_VALUE,produces=MediaType.TEXT_PLAIN_VALUE)
	public String guardarPreparacion(@RequestBody Preparacion p) {
		return String.valueOf(service2.guardarPreparacion(p));
	}
	@PostMapping(value="/modificar",consumes=MediaType.APPLICATION_JSON_VALUE)
	public void modificarPreparacion(@RequestBody Preparacion p) {		
		service2.modificarPreparacion(p);
	}
	@GetMapping(value="/",produces=MediaType.APPLICATION_JSON_VALUE)
	public List<Preparacion> listarPreparacion  () {
		return service2.listarPreparacion();
	}
	@GetMapping(value="/{id}",produces=MediaType.APPLICATION_JSON_VALUE)
	public Preparacion leerPreparacion(@PathVariable("id") int id) {
		return service2.leerPreparacion(id);
	}
	@DeleteMapping(value="/{id}")
	public void eliminarPreparacion(@PathVariable("id") int id) {
		service2.eliminarPreparacion(id);
		
	}
}

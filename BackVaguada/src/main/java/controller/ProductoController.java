package controller;

import java.util.ArrayList;
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
import model.Producto;
import service.PreparacionService;
import service.ProductoService;
@CrossOrigin(origins = "*") //permite recibir peticiones desde cualquier origen
@RestController
@RequestMapping("/productos")

public class ProductoController {
	@Autowired
	ProductoService service1;
	
	
//	@GetMapping(value="pruebas")
//	public void pruebas(){
//		Preparacion p1 = service2.leerPreparacion(1);
//		System.out.println(p1.toString()); 
//		Producto p2 = service1.leerProducto(1);
//		System.out.println(p2.toString());
//		System.out.println(service1.listarProductos());
//	}
	
	//PREGUNTAR AL CÁRCELES POR QUÉ DA UN ERROR AL DEVOLVER
	@GetMapping(value="/",produces=MediaType.APPLICATION_JSON_VALUE)
	public List<Producto> listarProductos() {
		return service1.listarProductos();
	}
	@GetMapping(value="/{id}",produces=MediaType.APPLICATION_JSON_VALUE)
	public Producto leerProducto(@PathVariable("id") int id) {
		Producto p1 = service1.leerProducto(id);
		return p1;
	}
	
	@PostMapping(value="/guardar",consumes=MediaType.APPLICATION_JSON_VALUE)
	public String guardarProducto(@RequestBody Producto p) {		
		return String.valueOf(service1.guardarProducto(p));
	}
	
	@PostMapping(value="/modificar",consumes=MediaType.APPLICATION_JSON_VALUE)
	public void modificarProducto(@RequestBody Producto p) {		
		service1.modificarProducto(p);
	}
		
	@DeleteMapping(value="/{id}")
	public void eliminarProducto(@PathVariable("id") int id) {
		service1.eliminarProducto(id);
		
	}
	
	
}

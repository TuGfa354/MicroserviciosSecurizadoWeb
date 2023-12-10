package controller;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RestController;

import model.Preparacion;
import model.Producto;
import service.PreparacionService;
import service.ProductoService;
@CrossOrigin(origins = "*") //permite recibir peticiones desde cualquier origen
@RestController
public class ProductoController {
	@Autowired
	ProductoService service1;
	@Autowired
	PreparacionService service2;
	
	@GetMapping(value="pruebas")
	public void pruebas(){
		Preparacion p1 = service2.leerPreparacion(1);
		System.out.println(p1.toString()); 
		Producto p2 = service1.leerProducto(1);
		System.out.println(p2.toString());
		System.out.println(service1.listarProductos());
	}
	
	//PREGUNTAR AL CÁRCELES POR QUÉ DA UN ERROR AL DEVOLVER
	@GetMapping(value="productos",produces=MediaType.APPLICATION_JSON_VALUE)
	public List<Producto> listarProductos() {
		return service1.listarProductos();
	}
	@GetMapping(value="productos/{id}",produces=MediaType.APPLICATION_JSON_VALUE)
	public Producto leerProducto(@PathVariable("id") int id) {
		Producto p1 = service1.leerProducto(id);
		System.out.println(p1.toString());
		return p1;
	}
	
	@PostMapping(value="productos/guardar",consumes=MediaType.APPLICATION_JSON_VALUE,produces=MediaType.TEXT_PLAIN_VALUE)
	public String guardarProducto(@RequestBody Producto p) {		
		return String.valueOf(service1.guardarProducto(p));
	}
	
	@PostMapping(value="productos/modificar",consumes=MediaType.APPLICATION_JSON_VALUE)
	public void modificarProducto(@RequestBody Producto p) {		
		service1.modificarProducto(p);
	}
		
	@DeleteMapping(value="productos/{id}")
	public void eliminarProducto(@PathVariable("id") int id) {
		service1.eliminarProducto(id);
		
	}
	@PostMapping(value="preparacion/guardar",consumes=MediaType.APPLICATION_JSON_VALUE,produces=MediaType.TEXT_PLAIN_VALUE)
	public String guardarPreparacion(@RequestBody Preparacion p) {
		return String.valueOf(service2.guardarPreparacion(p));
	}
	@PostMapping(value="preparacion/modificar",consumes=MediaType.APPLICATION_JSON_VALUE)
	public void modificarPreparacion(@RequestBody Preparacion p) {		
		service2.modificarPreparacion(p);
	}
	@GetMapping(value="preparacion",produces=MediaType.APPLICATION_JSON_VALUE)
	public List<Preparacion> listarPreparacion  () {
		return service2.listarPreparacion();
	}
	@GetMapping(value="preparacion/{id}",produces=MediaType.APPLICATION_JSON_VALUE)
	public Preparacion leerPreparacion(@PathVariable("id") int id) {
		return service2.leerPreparacion(id);
	}
	@DeleteMapping(value="preparacion/{id}")
	public void eliminarPreparacion(@PathVariable("id") int id) {
		service1.eliminarProducto(id);
		
	}
	
}

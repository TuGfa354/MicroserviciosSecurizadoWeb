package model;

import java.util.ArrayList;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.Table;

@Entity
@Table(name="preparacion")
public class Preparacion {

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private int idPreparacion;
	
	private String nombre;
	
	@ManyToMany(mappedBy = "preparacion")
	private ArrayList<Producto> productos = new ArrayList<>();

	public Preparacion(int idPreparacion, String nombre, ArrayList<Producto> productos) {
		super();
		this.idPreparacion = idPreparacion;
		this.nombre = nombre;
		this.productos = productos;
	}

	public Preparacion() {
		super();
	}

	public int getIdPreparacion() {
		return idPreparacion;
	}

	public void setIdPreparacion(int idPreparacion) {
		this.idPreparacion = idPreparacion;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public ArrayList<Producto> getProductos() {
		return productos;
	}

	public void setProductos(Producto producto) {
		this.productos.add(producto);
	}
	
	
	
}

package model;

import java.io.Serializable;
import java.util.List;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.NamedQuery;
import jakarta.persistence.Table;

@Entity
@Table(name="preparacion")
@NamedQuery(name="Preparacion.findAll", query="SELECT p FROM Preparacion p")

public class Preparacion implements Serializable{

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private int idPreparacion;
	
	private String nombre;
	
//	@ManyToMany(mappedBy = "preparaciones")
//	private List<Producto> productos;

	public Preparacion(int idPreparacion, String nombre) {
		super();
		this.idPreparacion = idPreparacion;
		this.nombre = nombre;
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

//	public List<Producto> getProductos() {
//		return productos;
//	}
//
//	public void setProductos(Producto producto) {
//		this.productos.add(producto);
//	}

	@Override
	public String toString() {
		return "Preparacion [idPreparacion=" + idPreparacion + ", nombre=" + nombre + "]";
	}
	
	
	
}

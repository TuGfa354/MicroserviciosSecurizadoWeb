package model;

import java.util.ArrayList;
import java.util.HashSet;

import org.hibernate.mapping.Set;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.JoinTable;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.Table;

@Entity
@Table(name="producto")
public class Producto {

	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private int idProducto;
	
	private String nombre;
	
	private float precio;
	
	private String categoria;
	
	private String url;
	
	@ManyToMany(cascade = {CascadeType.PERSIST, CascadeType.MERGE})
	@JoinTable(
			name = "preparacion_has_producto",
			joinColumns = @JoinColumn(name = "producto_idproducto"),
			inverseJoinColumns = @JoinColumn(name ="preparacion_idpreparacion")
			)
	private ArrayList<Preparacion> preparacion = new ArrayList<>();

	public Producto(int idProducto, String nombre, float precio, String categoria, String url) {
		super();
		this.idProducto = idProducto;
		this.nombre = nombre;
		this.precio = precio;
		this.categoria = categoria;
		this.url = url;
	}

	public Producto() {
		super();
	}

	public int getIdProducto() {
		return idProducto;
	}

	public void setIdProducto(int idProducto) {
		this.idProducto = idProducto;
	}

	public String getNombre() {
		return nombre;
	}

	public void setNombre(String nombre) {
		this.nombre = nombre;
	}

	public float getPrecio() {
		return precio;
	}

	public void setPrecio(float precio) {
		this.precio = precio;
	}

	public String getCategoria() {
		return categoria;
	}

	public void setCategoria(String categoria) {
		this.categoria = categoria;
	}

	public ArrayList<Preparacion> getPreparacion() {
		return preparacion;
	}

	public void addPreparacion(Preparacion preparacion) {
		this.preparacion.add(preparacion);
	}
	 
}


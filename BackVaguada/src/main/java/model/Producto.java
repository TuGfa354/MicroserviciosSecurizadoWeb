package model;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;

import jakarta.persistence.Entity;
import jakarta.persistence.FetchType;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.JoinTable;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.NamedQuery;
import jakarta.persistence.Table;

@Entity
@Table(name = "producto")
@NamedQuery(name="Producto.findAll", query="SELECT p FROM Producto p")

public class Producto implements Serializable{

	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int idProducto;

	private String nombre;

	private float precio;

	private String categoria;

	private String urlFeed;

	private String urlIndividual;

	@ManyToMany(fetch=FetchType.EAGER)
	@JoinTable(name = "preparacion_has_producto",
	joinColumns = @JoinColumn(name = "producto_idProducto"),
	inverseJoinColumns = @JoinColumn(name = "preparacion_idPreparacion"))
	private List<Preparacion> preparaciones;

	public Producto(int idProducto, String nombre, float precio, String categoria, String urlFeed, String urlIndividual,
			List<Preparacion>preparaciones) {
		super();
		this.idProducto = idProducto;
		this.nombre = nombre;
		this.precio = precio;
		this.categoria = categoria;
		this.urlFeed = urlFeed;
		this.urlIndividual = urlIndividual;
		this.preparaciones = preparaciones;
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

	public String getUrlFeed() {
		return urlFeed;
	}

	public void setUrlFeed(String urlFeed) {
		this.urlFeed = urlFeed;
	}

	public String getUrlIndividual() {
		return urlIndividual;
	}

	public void setUrlIndividual(String urlIndividual) {
		this.urlIndividual = urlIndividual;
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



	

	public List<Preparacion> getPreparaciones() {
		return preparaciones;
	}

	public void setPreparaciones(List<Preparacion> preparaciones) {
		this.preparaciones = preparaciones;
	}

	@Override
	public String toString() {
		return "Producto [idProducto=" + idProducto + ", nombre=" + nombre + ", precio=" + precio + ", categoria="
				+ categoria + ", urlFeed=" + urlFeed + ", urlIndividual=" + urlIndividual +  "]";
	}

}

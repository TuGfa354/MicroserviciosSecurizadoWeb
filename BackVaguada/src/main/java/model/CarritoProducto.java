//package model;
//
//import jakarta.persistence.Entity;
//import jakarta.persistence.Id;
//import jakarta.persistence.JoinColumn;
//import jakarta.persistence.ManyToOne;
//import jakarta.persistence.Table;
//
//@Entity
//@Table(name = "carrito_has_producto")
//public class CarritoProducto {
//
//	@Id
//	@ManyToOne
//	@JoinColumn(name = "carrito_idcarrito")
//	private Carrito carrito;
//	@Id
//	@ManyToOne
//	@JoinColumn(name = "producto_idProducto")
//	private Producto producto;
//
//	private int cantidad;
//
//	public CarritoProducto() {
//		super();
//	}
//
//	public CarritoProducto(Carrito carrito, Producto producto, int cantidad) {
//		super();
//		this.carrito = carrito;
//		this.producto = producto;
//		this.cantidad = cantidad;
//	}
//
//	public Carrito getCarrito() {
//		return carrito;
//	}
//
//	public void setCarrito(Carrito carrito) {
//		this.carrito = carrito;
//	}
//
//	public Producto getProducto() {
//		return producto;
//	}
//
//	public void setProducto(Producto producto) {
//		this.producto = producto;
//	}
//
//	public int getCantidad() {
//		return cantidad;
//	}
//
//	public void setCantidad(int cantidad) {
//		this.cantidad = cantidad;
//	}
//
//	@Override
//	public String toString() {
//		return "CarritoProducto [carrito=" + carrito + ", producto=" + producto + ", cantidad=" + cantidad + "]";
//	}
//	
//	
//}

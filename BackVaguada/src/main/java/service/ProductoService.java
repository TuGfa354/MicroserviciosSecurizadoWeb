package service;

import java.util.ArrayList;

import model.Producto;

public interface ProductoService {
	boolean guardarProducto(Producto producto);
	ArrayList<Producto> listarProductos();
	void modificarProducto(Producto producto);
	boolean eliminarProducto(int idProducto);
	Producto leerProducto(int idProducto);
}

package service;

import java.util.List;

import model.Producto;

public interface ProductoService {
	boolean guardarProducto(Producto producto);
	List<Producto> listarProductos();
	void modificarProducto(Producto producto);
	boolean eliminarProducto(int idProducto);
	Producto leerProducto(int idProducto);
//	List<Producto> listarCarnes(String categoria);

}

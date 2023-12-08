package dao;

import java.util.List;

import model.Producto;


public interface ProductoDao {
	void guardarProducto(Producto p);

	Producto leerProducto(int idProducto);

	void eliminarProducto(int idProducto);

	List<Producto> listarProductos();


	void modificarProducto(Producto p);
	
//	List<Producto> listarCarnes(String categoria);
}

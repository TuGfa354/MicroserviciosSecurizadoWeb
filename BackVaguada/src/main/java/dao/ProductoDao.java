package dao;

import java.util.ArrayList;

import model.Producto;


public interface ProductoDao {
	void guardarProducto(Producto p);

	Producto leerProducto(int idProducto);

	void eliminarProducto(int idProducto);

	ArrayList<Producto> listarProductos();


	void modificarProducto(Producto p);
}

package dao;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import model.Producto;

@Repository
public class ProductoDaoImpl implements ProductoDao {

	@Autowired
	ProductoJpaSpring producto;
	@Override
	public void guardarProducto(Producto p) {
		producto.save(p);
	}
	@Override
	public Producto leerProducto(int idProducto) {
		
		return producto.findById(idProducto).orElse(null);
	}

	@Override
	public void eliminarProducto(int idProducto) {
		producto.deleteById(idProducto);
		
	}

	@Override
	public ArrayList<Producto> listarProductos() {
		
		return (ArrayList<Producto>) producto.findAll();
	}

	@Override
	public void modificarProducto(Producto p) {
		producto.save(p);

		
	}

}

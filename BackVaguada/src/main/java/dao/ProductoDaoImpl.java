package dao;

import java.util.List;

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
	public List<Producto> listarProductos() {
		
		return producto.findAll();
	}

	@Override
	public void modificarProducto(Producto p) {
		producto.save(p);

		
	}
//	public List<Producto> listarCarnes(String categoria){
//		
//		return producto.findByCategoriaIn(categoria);
//	}

}

package dao;

import java.util.ArrayList;
import java.util.List;
import java.util.Set;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import model.Producto;

@Repository
public class ProductoDaoImpl implements ProductoDao {

	@Autowired
	ProductoJpaSpring producto;
	@Autowired
	PreparacionJpaSpring preparacion;
	@Override
	public void guardarProducto(Producto p) {
		producto.save(p);
		preparacion.save(p.getPreparaciones().get(0));
		
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
		
		return  producto.findAll();
	}

	@Override
	public void modificarProducto(Producto p) {
		producto.save(p);
		preparacion.save(p.getPreparaciones().get(0));

		
	}
//	public Set<Producto> listarCarnes(String categoria){
//		
//		return producto.findByCategoriaIn(categoria);
//	}

}

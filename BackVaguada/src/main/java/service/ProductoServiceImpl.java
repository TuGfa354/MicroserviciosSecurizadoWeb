package service;

import java.util.ArrayList;

import org.springframework.beans.factory.annotation.Autowired;

import dao.PreparacionDao;
import dao.ProductoDao;
import model.Producto;

public class ProductoServiceImpl implements ProductoService{
	@Autowired
	ProductoDao dao;

	@Override
	public boolean guardarProducto(Producto producto) {
		if (dao.leerProducto(producto.getIdProducto()) == null) {
			dao.guardarProducto(producto);
			return true;
		}
		return false;
	}

	@Override
	public ArrayList<Producto> listarProductos() {
		try {
			Thread.sleep(8000);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return dao.listarProductos();
	}

	@Override
	public void modificarProducto(Producto producto) {
		if (dao.leerProducto(producto.getIdProducto()) != null) {
			dao.modificarProducto(producto);
		}

	}

	@Override
	public boolean eliminarProducto(int idProducto) {
		if(dao.leerProducto(idProducto)!=null) {
			dao.eliminarProducto(idProducto);
			return true;
		}
		return false;
	}

	@Override
	public Producto leerProducto(int idProducto) {
		// TODO Auto-generated method stub
		return dao.leerProducto(idProducto);
	}

}

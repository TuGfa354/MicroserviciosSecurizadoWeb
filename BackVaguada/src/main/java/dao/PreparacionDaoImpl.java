package dao;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import model.Preparacion;

@Repository
public class PreparacionDaoImpl implements PreparacionDao {
	@Autowired
	PreparacionJpaSpring preparacion;
	@Override
	public void guardarPreparacion(Preparacion p) {
		preparacion.save(p);
	}
	@Override
	public Preparacion leerPreparacion(int idPreparacion) {
		
		return preparacion.findById(idPreparacion).orElse(null);
	}

	@Override
	public void eliminarPreparacion(int idPreparacion) {
		preparacion.deleteById(idPreparacion);
		
	}

	@Override
	public List<Preparacion> listarPreparacion() {
		
		return  preparacion.findAll();
	}

	@Override
	public void modificarPreparacion(Preparacion p) {
		preparacion.save(p);

		
	}
}

package service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import dao.PreparacionDao;
import model.Preparacion;
@Service
@Transactional

public class PreparacionServiceImpl implements PreparacionService{
	@Autowired
	PreparacionDao dao;

	@Override
	public boolean guardarPreparacion(Preparacion p) {
		if (dao.leerPreparacion(p.getIdPreparacion()) == null) {
			dao.guardarPreparacion(p);
			return true;
		}
		return false;
	}

	@Override
	public List<Preparacion> listarPreparacion() {
		try {
			Thread.sleep(8000);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return dao.listarPreparacion();
	}

	@Override
	public void modificarPreparacion(Preparacion p) {
		if (dao.leerPreparacion(p.getIdPreparacion()) != null) {
			dao.modificarPreparacion(p);
		}

	}

	@Override
	public boolean eliminarPreparacion(int idPreparacion) {
		if(dao.leerPreparacion(idPreparacion)!=null) {
			dao.eliminarPreparacion(idPreparacion);
			return true;
		}
		return false;
	}

	@Override
	public Preparacion leerPreparacion(int idPreparacion) {
		// TODO Auto-generated method stub
		return dao.leerPreparacion(idPreparacion);
	}
}

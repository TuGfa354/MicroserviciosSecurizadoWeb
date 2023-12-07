package dao;

import java.util.List;

import model.Preparacion;

public interface PreparacionDao {

	void guardarPreparacion(Preparacion p);
	void modificarPreparacion(Preparacion p);
	void eliminarPreparacion(int idPreparacion);
	Preparacion leerPreparacion(int idPreparacion);
	List<Preparacion> listarPreparacion();

}

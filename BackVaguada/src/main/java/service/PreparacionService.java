package service;

import java.util.ArrayList;
import java.util.List;

import model.Preparacion;

public interface PreparacionService {
	boolean guardarPreparacion(Preparacion p);
	List<Preparacion> listarPreparacion();
	void modificarPreparacion(Preparacion p);
	boolean eliminarPreparacion(int idPreparacion);
	Preparacion leerPreparacion(int idPreparacion);
}

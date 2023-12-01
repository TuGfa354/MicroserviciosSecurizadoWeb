package service;

import java.util.ArrayList;

import model.Preparacion;

public interface PreparacionService {
	boolean guardarPreparacion(Preparacion p);
	ArrayList<Preparacion> listarPreparacion();
	void modificarPreparacion(Preparacion p);
	boolean eliminarPreparacion(int idPreparacion);
	Preparacion leerPreparacion(int idPreparacion);
}

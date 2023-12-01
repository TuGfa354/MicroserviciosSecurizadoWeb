package dao;

import java.util.ArrayList;

import model.Preparacion;
import model.Producto;

public interface PreparacionDao {

	void guardarPreparacion(Preparacion p);
	void modificarPreparacion(Preparacion p);
	void eliminarPreparacion(int idPreparacion);
	Preparacion leerPreparacion(int idPreparacion);
	ArrayList<Preparacion> listarPreparacion();

}

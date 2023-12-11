package service;

import java.util.List;

import model.User;

public interface UserService {
	boolean guardarUser(User user);
	List<User> listarUsers();
	void modificarUser(User user);
	boolean eliminarUser(int idUser);
	User leerUser(int idUser);
}

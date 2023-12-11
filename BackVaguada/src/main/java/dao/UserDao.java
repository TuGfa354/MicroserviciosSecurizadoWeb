package dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;

import model.User;

public interface UserDao {
	void guardarUser(User u);

	User leerUser(int idUser);

	void eliminarUser(int idUser);

	List<User> listarUsers();
	

	void modificarUser(User p);
}

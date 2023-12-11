package dao;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import model.User;

@Repository
public class UserDaoImpl implements UserDao{
	@Autowired
	UserJpaSpring user;

	public void guardarUser(User u) {
		user.save(u);
	}

	public User leerUser(int idUser) {

		return user.findById(idUser).orElse(null);
	}

	public void eliminarUser(int idUser) {
		user.deleteById(idUser);

	}

	public List<User> listarUsers() {

		return  user.findAll();
	}

	public void modificarUser(User p) {
		user.save(p);
	}

	@Override
	public Optional<User> findByUsername(String username) {
		// TODO Auto-generated method stub
		return  user.findByUsername(username);
	}
}

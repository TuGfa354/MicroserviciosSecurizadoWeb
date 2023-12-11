package service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import dao.UserDao;
import model.User;

@Service
public class UserServiceImpl {

	@Autowired
	UserDao dao;

	public boolean guardarUser(User producto) {
		if (dao.leerUser(producto.getIdUser()) == null) {
			dao.guardarUser(producto);
			return true;
		}
		return false;
	}

	public List<User> listarUsers() {
		try {
			Thread.sleep(8000);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return dao.listarUsers();
	}
//	@Override
//	public List<User> listarCarnes(String categoria) {
//		try {
//			Thread.sleep(8000);
//		} catch (InterruptedException e) {
//			// TODO Auto-generated catch block
//			e.printStackTrace();
//		}
//		return dao.listarCarnes(categoria);
//	}

	public void modificarUser(User producto) {
		if (dao.leerUser(producto.getIdUser()) != null) {
			dao.modificarUser(producto);
		}

	}

	public boolean eliminarUser(int idUser) {
		if (dao.leerUser(idUser) != null) {
			dao.eliminarUser(idUser);
			return true;
		}
		return false;
	}

	public User leerUser(int idUser) {
		// TODO Auto-generated method stub
		return dao.leerUser(idUser);

	}
}
package service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.userdetails.UserDetails;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.core.userdetails.UsernameNotFoundException;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import dao.UserDao;
import model.User;

@Service
@Transactional
public class UserServiceImpl implements UserService, UserDetailsService{

	@Autowired
	UserDao dao;
	
	@Autowired
	private PasswordEncoder encoder;

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

	@Override
	public UserDetails loadUserByUsername(String username) throws UsernameNotFoundException {
		// TODO Auto-generated method stub
		return dao.findByUsername(username).orElseThrow(() -> new UsernameNotFoundException("user is not valid"));
	}

	@Override
	public Optional<User> findByUsername(String username) {
		// TODO Auto-generated method stub
		return dao.findByUsername(username);
	}
}
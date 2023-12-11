package service;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import dao.RoleDao;
import model.Role;
@Service
@Transactional

public class RoleServiceImpl implements RoleService{

	@Autowired
	RoleDao dao;
	


	public boolean guardarRole(Role producto) {
		if (dao.leerRole(producto.getIdRole()) == null) {
			dao.guardarRole(producto);
			return true;
		}
		return false;
	}

	public List<Role> listarRoles() {
		try {
			Thread.sleep(8000);
		} catch (InterruptedException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return dao.listarRoles();
	}


	public void modificarRole(Role producto) {
		if (dao.leerRole(producto.getIdRole()) != null) {
			dao.modificarRole(producto);
		}

	}

	public boolean eliminarRole(int idRole) {
		if (dao.leerRole(idRole) != null) {
			dao.eliminarRole(idRole);
			return true;
		}
		return false;
	}

	public Role leerRole(int idRole) {
		// TODO Auto-generated method stub
		return dao.leerRole(idRole);

	}


	@Override
	public Optional<Role> findByAuthority(String authority) {
		// TODO Auto-generated method stub
		return dao.findByAuthority(authority);
	}
}

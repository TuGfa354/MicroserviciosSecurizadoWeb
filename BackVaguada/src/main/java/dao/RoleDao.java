package dao;

import java.util.List;
import java.util.Optional;

import model.Role;

public interface RoleDao {

		void guardarRole(Role r);

		Role leerRole(int idRole);

		void eliminarRole(int idRole);

		List<Role> listarRoles();
		

		void modificarRole(Role r);
		
	    Optional<Role> findByAuthority(String authority);

	}


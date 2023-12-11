package service;

import java.util.List;
import java.util.Optional;

import model.Role;

public interface RoleService {
	boolean guardarRole(Role role);
	List<Role> listarRoles();
	void modificarRole(Role role);
	boolean eliminarRole(int idRole);
	Role leerRole(int idRole);
    Optional<Role> findByAuthority(String authority);
}

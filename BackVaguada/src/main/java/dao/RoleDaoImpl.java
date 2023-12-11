package dao;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import model.Role;
@Repository
public class RoleDaoImpl implements RoleDao{
	@Autowired
	RoleJpaSpring role;
	@Override
	public void guardarRole(Role r) {
		// TODO Auto-generated method stub
		role.save(r);
	}

	@Override
	public Role leerRole(int idRole) {
		// TODO Auto-generated method stub
		return role.findById(idRole).orElse(null);
	}

	@Override
	public void eliminarRole(int idRole) {
		// TODO Auto-generated method stub
		role.deleteById(idRole);

	}

	@Override
	public List<Role> listarRoles() {
		// TODO Auto-generated method stub
		return  role.findAll();
	}

	@Override
	public void modificarRole(Role r) {
		// TODO Auto-generated method stub
		role.save(r);

	}

	@Override
	public Optional<Role> findByAuthority(String authority) {
		// TODO Auto-generated method stub
		return role.findByAuthority(authority);
	}

}

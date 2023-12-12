package service;

import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import dao.RoleJpaSpring;
import model.Role;
@Service
@Transactional

public class RoleServiceImpl {

	@Autowired
	RoleJpaSpring dao;
	


	public Optional<Role> findByAuthority(String authority) {
		// TODO Auto-generated method stub
		return dao.findByAuthority(authority);
	}
}

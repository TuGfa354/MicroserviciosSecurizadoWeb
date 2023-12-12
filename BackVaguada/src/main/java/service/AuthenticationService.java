package service;

import java.util.HashSet;
import java.util.Set;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import model.Role;
import model.User;

@Service
@Transactional
public class AuthenticationService {

	@Autowired
	private UserService userService;
	
	@Autowired RoleService roleService;
	
	@Autowired PasswordEncoder passwordEncoder;
	
	public boolean registrarUsuario(String username,String password ) {
		String encodedPassword = passwordEncoder.encode(password);
		Role userRole = roleService.findByAuthority("USER").get();
		Set<Role> authorities = new HashSet<>();
		authorities.add(userRole);
		User u1 = new User(0, username, encodedPassword, authorities);
		 return userService.guardarUser(u1);
	}
	
}

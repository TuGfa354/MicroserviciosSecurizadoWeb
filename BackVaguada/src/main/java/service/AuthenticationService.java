package service;

import java.util.HashSet;
import java.util.Set;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.authentication.AuthenticationManager;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.AuthenticationException;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import dao.RoleJpaSpring;
import dao.UserJpaSpring;
import model.LoginDto;
import model.Role;
import model.User;

@Service
//@Transactional
public class AuthenticationService {

	@Autowired
	private UserJpaSpring userService;

	@Autowired
	RoleJpaSpring roleService;

	@Autowired
	PasswordEncoder passwordEncoder;

	@Autowired
	private AuthenticationManager authenticationManager;

	@Autowired
	private TokenService tokenService;

	public User registrarUsuario(String username, String password) {
		String encodedPassword = passwordEncoder.encode(password);
		Role userRole = roleService.findByAuthority("USER").get();
		Set<Role> authorities = new HashSet<>();
		authorities.add(userRole);
		User u1 = new User(0, username, encodedPassword, authorities);
		return userService.save(u1);
	}

	public LoginDto loginUsuario(String username, String password) {

		 try{
	            Authentication auth = authenticationManager.authenticate(
	                new UsernamePasswordAuthenticationToken(username, password)
	            );

	            String token = tokenService.generateJwt(auth);

	            return new LoginDto(userService.findByUsername(username).get(), token);

	        } catch(AuthenticationException e){
	            return new LoginDto(null, "");
	        }

		
	}

}

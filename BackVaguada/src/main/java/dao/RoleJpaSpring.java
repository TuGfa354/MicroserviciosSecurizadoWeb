package dao;

import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;

import model.Role;

public interface RoleJpaSpring extends JpaRepository<Role, Integer>{

	Optional<Role> findByAuthority(String authority);
}

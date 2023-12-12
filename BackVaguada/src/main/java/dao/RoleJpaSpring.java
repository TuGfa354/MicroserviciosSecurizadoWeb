package dao;

import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import model.Role;
@Repository
public interface RoleJpaSpring extends JpaRepository<Role, Integer>{

	Optional<Role> findByAuthority(String authority);
}

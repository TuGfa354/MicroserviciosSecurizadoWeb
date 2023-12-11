package dao;

import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import model.User;
public interface UserJpaSpring extends JpaRepository<User, Integer>{

    Optional<User> findByUsername(String username);

}

package dao;

import org.springframework.data.jpa.repository.JpaRepository;

import model.User;

public interface UserJpaSpring extends JpaRepository<User, Integer>{

    User findByUsername(String username);

}

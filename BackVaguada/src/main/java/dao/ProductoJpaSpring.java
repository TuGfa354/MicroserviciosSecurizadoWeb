package dao;

import org.springframework.data.jpa.repository.JpaRepository;

import model.Producto;

public interface ProductoJpaSpring extends JpaRepository<Producto, Integer>{

}

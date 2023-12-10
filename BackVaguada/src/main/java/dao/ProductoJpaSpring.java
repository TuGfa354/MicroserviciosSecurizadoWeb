package dao;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import model.Producto;

public interface ProductoJpaSpring extends JpaRepository<Producto, Integer>{

//	 @Query("SELECT e FROM producto e WHERE e.categoria IN (?1)")
//	    List<Producto> findByCategoriaIn(String categoria);
}

package model;

import java.util.List;

import jakarta.persistence.Entity;
import jakarta.persistence.FetchType;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;

@Entity
@Table(name="carrito")
public class Carrito {
	@Id
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private int idcarrito;
	@ManyToOne
    @JoinColumn(name = "user_iduser")
    private User user;

    @OneToMany(mappedBy = "carrito",fetch=FetchType.EAGER)
    private List<CarritoProducto> carritoProducto;

	public Carrito() {
		super();
	}

	public Carrito(int idcarrito, User user, List<CarritoProducto> carritoProducto) {
		super();
		this.idcarrito = idcarrito;
		this.user = user;
		this.carritoProducto = carritoProducto;
	}

	public int getIdcarrito() {
		return idcarrito;
	}

	public void setIdcarrito(int idcarrito) {
		this.idcarrito = idcarrito;
	}

	public User getUser() {
		return user;
	}

	public void setUser(User user) {
		this.user = user;
	}

	public List<CarritoProducto> getCarritoProducto() {
		return carritoProducto;
	}

	public void setCarritoProducto(List<CarritoProducto> carritoProducto) {
		this.carritoProducto = carritoProducto;
	}

	@Override
	public String toString() {
		return "Carrito [idcarrito=" + idcarrito + ", user=" + user + ", carritoProducto=" + carritoProducto + "]";
	}
    
    
}

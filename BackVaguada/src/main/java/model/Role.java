package model;

import java.io.Serializable;

import org.springframework.security.core.GrantedAuthority;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.NamedQuery;
import jakarta.persistence.Table;

@Entity
@Table(name = "role")
//@NamedQuery(name="role.findAll", query="SELECT r FROM role r")

public class Role implements GrantedAuthority, Serializable {
	@Id
	@GeneratedValue(strategy=GenerationType.IDENTITY)
	private int idRole;
	
	private String authority;

	@Override
	public String getAuthority() {
		// TODO Auto-generated method stub
		return this.authority;
	}

	public Role() {
		super();
	}

	public Role(int idRole, String authority) {
		super();
		this.idRole = idRole;
		this.authority = authority;
	}
	

	public Role(String authority) {
		super();
		this.authority = authority;
	}

	public int getIdRole() {
		return idRole;
	}

	public void setIdRole(int idRole) {
		this.idRole = idRole;
	}

	public void setAuthority(String authority) {
		this.authority = authority;
	}

	@Override
	public String toString() {
		return "Role [idRole=" + idRole + ", authority=" + authority + "]";
	}
	

}

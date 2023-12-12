package model;

public class LoginDto {

	private User user;
	private String jwt;

	public LoginDto() {
		super();
	}

	public LoginDto(User user, String jwt) {
		super();
		this.user = user;
		this.jwt = jwt;
	}

	public User getUser() {
		return user;
	}

	public void setUser(User user) {
		this.user = user;
	}

	public String getJwt() {
		return jwt;
	}

	public void setJwt(String jwt) {
		this.jwt = jwt;
	}

}

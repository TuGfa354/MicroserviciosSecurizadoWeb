document.addEventListener('DOMContentLoaded', function () {
    // Agregar evento al botón al cargar la página
    var loginButton = document.querySelector('.form__submit');
    loginButton.addEventListener('click', enviarFormulario);
});

function enviarFormulario() {
    // Obtener valores de los campos
    var username = document.getElementById("loginUsername").value;
    var password = document.getElementById("loginPassword").value;

    // Crear objeto JSON
    var formData = {
        "username": username,
        "password": password
    };
    if (validateForm()) {

        // Enviar datos al servidor
        fetch('http://localhost:9000/user/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
            .then(response => response.json())
            .then(data => {
                if (data.user != null) {
                    alert("Login exitoso")
                    console.log(data)
                } else {
                    alert("Usuario o contraseña incorrectos")
                }
                // Hacer algo con la respuesta del servidor, si es necesario
                var token = data.jwt;
                var expirationTime = new Date().getTime() + 60 * 60 * 1000;
                var role = data.user.roles[0].authority
                // Move the setToken declaration above its usage
                const setToken = (token, expirationTime, role) => {
                    localStorage.setItem('token', token);
                    localStorage.setItem('tokenExpiration', expirationTime);
                    localStorage.setItem('role', role)
                };
                setToken(token, expirationTime, role);
            })
            .catch(error => {
                console.error('Error al enviar los datos:', error);
            });
    }
}
function validateForm() {
    var username = document.getElementById("loginUsername").value;
    var password = document.getElementById("loginPassword").value;
    console.log("validando")
    // Regular expressions for validation
    var usernamePattern = /^[a-zA-Z]{1,15}$/;
    var passwordPattern = /^\S{1,15}$/; // Ensures everything but spaces, maximum length 15

    if (!usernamePattern.test(username)) {
        alert("El nombre de usuario debe ser solo letras con un máximo de 15.");
        return false;
    }

    if (!passwordPattern.test(password)) {
        alert("La contraseña no puede contener espacios y tiene un máximo de 15.");
        return false;
    }

    // You can add more validations if needed

    alert("Formulario validado. Puedes proceder con la validación.");
    return true; // Form is valid, proceed with submission
}

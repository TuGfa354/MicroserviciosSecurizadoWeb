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
            if(data){
                alert("Login exitoso")
            }
            // Hacer algo con la respuesta del servidor, si es necesario
            var token = data.jwt;
            var expirationTime = new Date().getTime() + 60 * 60 * 1000;
            setToken(token, expirationTime);
            const setToken = (token, expirationTime) => {
                localStorage.setItem('token', token);
                localStorage.setItem('tokenExpiration', expirationTime);
              };

        })
        .catch(error => {
            console.error('Error al enviar los datos:', error);
        });
}

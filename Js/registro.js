document.addEventListener('DOMContentLoaded', function () {
    // Agregar evento al botón al cargar la página
    var registroButton = document.querySelector('.form__submit');
    registroButton.addEventListener('click', enviarFormulario);
});

function enviarFormulario() {
    // Obtener valores de los campos
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Crear objeto JSON
    var formData = {
        "username": username,
        "password": password
    };

    // Enviar datos al servidor
    fetch('http://localhost:9000/user/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(formData)
    })
        .then(response => response.json())
        .then(data => {
            // Hacer algo con la respuesta del servidor, si es necesario
            if(data){
                alert("Registro exitoso");
                // Puedes redirigir a la página de inicio de sesión u otra acción aquí
            }
        })
        .catch(error => {
            console.error('Error al enviar los datos:', error);
        });
}
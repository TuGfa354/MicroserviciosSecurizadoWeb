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
    if (validateForm()) {


        console.log("validado")

        fetch('http://localhost:9000/user/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
            .then(response => response.json())
            .then(data => {
                console.log("hola");
                // if (data) {
                //     alert("Registro exitoso");
                //     // Puedes redirigir a la página de inicio de sesión u otra acción aquí
                // }
            })
            .catch(error => {
                console.error('Error al enviar los datos:', error);
            });
    }   
}
function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
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
function usuarioMenu() {
    window.location.href = "http://localhost/vaguadaInterfaces/VaguadaInterfaces/HTML/User.php"; // Reemplaza esto con la URL de tu página de registro
}

function carritoMenu() {
// Obtén el ID del producto desde el atributo de datos del elemento HTML
    const role = localStorage.getItem('role');
    if(role =='USER'){
        window.location.href = "http://localhost/vaguadaInterfaces/VaguadaInterfaces/HTML/carrito.php"; // Reemplaza esto con la URL de tu página de registro
    }else{
        alert("Solo los usuarios pueden acceder a carrito")
    }
}
window.onload = function () {
    const storedToken = localStorage.getItem('token');
    const storedExpirationTime = localStorage.getItem('tokenExpiration');
    const isTokenValid = storedToken && storedExpirationTime && new Date().getTime() < storedExpirationTime;

    var botonLogin = document.getElementById("login");

    if (isTokenValid) {
        console.log("Token válido, cambiando el href del enlace");
        botonLogin.innerHTML= "Cerrar sesión"
        // Get the <a> element inside botonLogin

        // Update the href attribute of the <a> element
       
            botonLogin.setAttribute('href', '#');
            // Add an event listener for the logout action
            botonLogin.addEventListener('click', function () {
                // Lógica para cerrar sesión, por ejemplo, borrar el token y recargar la página
                localStorage.removeItem('token');
                localStorage.removeItem('tokenExpiration');
                localStorage.removeItem('role')
                location.reload(); // Recargar la página
            });
        
    }
};




const storedToken = localStorage.getItem('token');
const storedExpirationTime = localStorage.getItem('tokenExpiration');
const isTokenValid = storedToken && storedExpirationTime && new Date().getTime() < storedExpirationTime;
window.onload = function () {


    var botonLogin = document.getElementById("login");
    console.log(storedToken, isTokenValid)

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
function usuarioMenu() {
    window.location.href = "http://localhost/vaguadaInterfaces/VaguadaInterfaces/HTML/User.php";
}

function carritoMenu() {
// Obtén el ID del producto desde el atributo de datos del elemento HTML
    const role = localStorage.getItem('role');
    console.log(role)
    if(role =='USER' && isTokenValid){
        window.location.href = "http://localhost/vaguadaInterfaces/VaguadaInterfaces/HTML/carrito.php"; 
    }else if(role =='ADMIN'&& isTokenValid){
        window.location.href = "http://localhost/vaguadaInterfaces/VaguadaInterfaces/HTML/admin.php";
    }else{
        alert("Inicia sesión para acceder")
    }
}




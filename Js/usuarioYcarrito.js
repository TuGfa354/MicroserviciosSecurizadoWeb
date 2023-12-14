function usuarioMenu() {
    window.location.href = "http://localhost/vaguadaInterfaces/VaguadaInterfaces/HTML/User.php"; // Reemplaza esto con la URL de tu página de registro
}

function carritoMenu() {
// Obtén el ID del producto desde el atributo de datos del elemento HTML
    const role = localStorage.getItem('role');
    if(role =='USER'){
        window.location.href = "http://localhost/vaguadaInterfaces/VaguadaInterfaces/HTML/carrito.php"; // Reemplaza esto con la URL de tu página de registro

    }
}

var storedToken
var storedExpirationTime
var role
var isTokenValid 
document.addEventListener("DOMContentLoaded", function () {
     storedToken = localStorage.getItem('token');
     storedExpirationTime = localStorage.getItem('tokenExpiration');
     role = localStorage.getItem('role')
     isTokenValid = storedToken && storedExpirationTime && new Date().getTime() < storedExpirationTime;
    const productUrl = "http://localhost:9000/preparacion/";
    const selectElement = document.getElementById("modo-preparacion");

    fetch(productUrl)
        .then(response => response.json())
        .then(productData => {
            console.log(productData)
            // Update the options in the select element
            productData.forEach(option => {
                const optionElement = document.createElement("option");
                optionElement.value = option.idPreparacion;
                optionElement.textContent = option.nombre;
                selectElement.appendChild(optionElement);
            });
        });
});

function sendForm() {
    if (isTokenValid && role =="ADMIN") {
        if (validateForm()) {
            var formData = {
                nombre: document.getElementById("nombre").value,
                precio: (document.getElementById("precio").value), // Convert to float
                categoria: document.getElementById("categoria").value,
                preparacion: [
                    {
                        idPreparacion: document.getElementById("modo-preparacion").value,
                        nombre: document.getElementById("modo-preparacion").options[document.getElementById("modo-preparacion").selectedIndex].text
                    }
                ],
                urlFeed: document.getElementById("urlFeed").value,
                urlIndividual: document.getElementById("urlIndividual").value,
            };
            console.log(JSON.stringify(formData))

            fetch("http://localhost:9000/productos/guardar", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    'Authorization': `Bearer ${storedToken}`,
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.json();
            })
            .then(data => {
                console.log("Data sent successfully:", data);
            })
            .catch(error => {
                console.error("Error sending data:", error);
            });
        }
    }
}


function validateForm() {
    var nombre = document.getElementById("nombre").value;
    var precio = document.getElementById("precio").value;
    var categoria = document.getElementById("categoria").value;
    var urlFeed = document.getElementById("urlFeed");
    var urlIndivual = document.getElementById("urlIndividual");


    // Regular expressions for validation
    var lettersAndSpaces = /^[a-zA-Z\s]{1,20}$/;
    if (urlFeed.value.length > 100) {
        alert("Las URLS tienen un máximo de 100 caracteres.");
        return false;

    }
    if (urlIndivual.value.length > 100) {
        alert("Las URLS tienen un máximo de 100 caracteres.");
        return false;

    }
    if (!lettersAndSpaces.test(nombre)) {
        alert("Nombre debe contener solo letras y espacios, máximo 20 caracteres.");
        return false;
    }

    // Ensure the price follows the format xx.xx with a dot as the decimal separator
    var priceFormat = /^\d+(\.\d{2})?$/;
    if (!priceFormat.test(precio)) {
        alert("Precio debe contener solo números con formato xx.xx .");
        return false;
    }

    if (!lettersAndSpaces.test(categoria)) {
        alert("Categoría debe contener solo letras y espacios, máximo 20 caracteres.");
        return false;
    }

    // You can add more validations if needed

    alert("Formulario validado. Puedes proceder con la validación.");
    return true; // Form is valid, proceed with submission
}
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
    if (isTokenValid && role == "ADMIN") {
        if (validateForm()) {
            var formData = {
                nombre: document.getElementById("nombre").value,
                precio: (document.getElementById("precio").value), // Convert to float
                categoria: document.getElementById("categoria").value,
                preparaciones: [
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

function listProductos() {

    const formContainer = document.getElementById("formulario-container");

    fetch("http://localhost:9000/productos/")
        .then(response => response.json())
        .then(productData => {
            console.log(productData)



            productData.forEach(product => {
                const formElement = createFormElement(product);
                formContainer.appendChild(formElement);
            });
        })
        .catch(error => {
            console.error("Error fetching JSON:", error);
        });

}
function createFormElement(product) {
    const formDiv = document.createElement("div");
    formDiv.className = "formulario-carrito";

    const form = document.createElement("form");
    form.id = `formulario-${product.idProducto}`;

    for (const property in product) {

        if (property === "preparaciones") {
            const preparacionesDiv = document.createElement("div");
            preparacionesDiv.className = "form__group";

            const preparacionLabel = document.createElement("label");
            preparacionLabel.textContent = "Modo de Preparación:";
            preparacionesDiv.appendChild(preparacionLabel);

            const selectElement = document.createElement("select");
            selectElement.id = `modo-preparacion-${product.idProducto}`;
            selectElement.className = "form__input";

            product[property].forEach(preparacion => {
                const optionElement = document.createElement("option");
                optionElement.value = preparacion.idPreparacion;
                optionElement.textContent = preparacion.nombre;
                selectElement.appendChild(optionElement);
            });

            preparacionesDiv.appendChild(selectElement);
            form.appendChild(preparacionesDiv);
        } else {
            const formGroupDiv = document.createElement("div");
            formGroupDiv.className = "form__group";

            const inputContainerDiv = document.createElement("div");
            inputContainerDiv.className = "input-container";

            const labelElement = document.createElement("label");
            labelElement.textContent = `${property[0].toUpperCase() + property.slice(1)}:`;

            const inputElement = document.createElement("input");
            inputElement.type = "text";
            inputElement.id = `${property}-${product.idProducto}`;
            inputElement.className = "form__input";
            inputElement.value = product[property];

            // Disable the input for ID
            if (property === "idProducto") {
                inputElement.disabled = true;
            }

            inputContainerDiv.appendChild(labelElement);
            inputContainerDiv.appendChild(inputElement);
            formGroupDiv.appendChild(inputContainerDiv);
            form.appendChild(formGroupDiv);
        }
    }

    const modifyButton = document.createElement("button");
    modifyButton.type = "button";
    modifyButton.textContent = "Modificar";
    modifyButton.addEventListener("click", function () {
        modificarProducto(product.idProducto);
    });
    const deleteButton = document.createElement("button");
    deleteButton.type = "button";
    deleteButton.textContent = "Eliminar";
    deleteButton.addEventListener("click", function () {
        eliminarProducto(product.idProducto);
    });

    const formGroupDiv = document.createElement("div");
    formGroupDiv.className = "form__group";
    const inputContainerDiv = document.createElement("div");
    inputContainerDiv.className = "input-container";

    inputContainerDiv.appendChild(modifyButton);
    inputContainerDiv.appendChild(deleteButton);

    formGroupDiv.appendChild(inputContainerDiv);
    form.appendChild(formGroupDiv);

    formDiv.appendChild(form);
    return formDiv;
}

// Function to modify the product
function modificarProducto(id) {
    // Implement your logic here
    if (isTokenValid && role == "ADMIN") {
        if (validateModificar(id)) {
            var formData = {
                idProducto: document.getElementById("idProducto-" + id).value,
                nombre: document.getElementById("nombre-" + id).value,
                precio: (document.getElementById("precio-" + id).value), // Convert to float
                categoria: document.getElementById("categoria-" + id).value,
                preparaciones: [
                    {
                        idPreparacion: document.getElementById("modo-preparacion").value,
                        nombre: document.getElementById("modo-preparacion").options[document.getElementById("modo-preparacion").selectedIndex].text
                    }
                ],
                urlFeed: document.getElementById("urlFeed-" + id).value,
                urlIndividual: document.getElementById("urlIndividual-" + id).value,
            };
            console.log(JSON.stringify(formData))
            fetch("http://localhost:9000/productos/modificar", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    'Authorization': `Bearer ${storedToken}`,
                },
                body: JSON.stringify(formData)
            })
                .then(alert("Producto modificado correctamente"))
                .catch(error => {
                    console.error("Error sending data:", error);
                });
        }
    }

}

function validateModificar(idProducto) {
    var nombre = document.getElementById("nombre-" + idProducto).value;
    var precio = document.getElementById("precio-" + idProducto).value;
    var categoria = document.getElementById("categoria-" + idProducto).value;
    var urlFeed = document.getElementById("urlFeed-" + idProducto);
    var urlIndivual = document.getElementById("urlIndividual-" + idProducto);


    // Regular expressions for validation
    var lettersAndSpaces = /^[a-zA-Z\s]{1,40}$/;
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

function eliminarProducto(id) {
    // Implement your logic here
    if (isTokenValid && role == "ADMIN") {
        fetch("http://localhost:9000/productos/" + id, {
            method: "DELETE",
            headers: {
                'Authorization': `Bearer ${storedToken}`,
            },
        })
            .then(alert("Producto eliminado correctamente"))
            .catch(error => {
                console.error("Error sending data:", error);
            });
    }
}
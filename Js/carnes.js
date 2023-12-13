window.onload = function () {
    let createdElements = []; // Array to keep track of created elements

    // Function to group an array of objects by a specified key
    function groupBy(array, key) {
        return array.reduce((result, item) => {
            (result[item[key]] = result[item[key]] || []).push(item);
            return result;
        }, {});
    }

    // Function to handle loaded images
    function handleLoadedImages() {
        const imagenes = document.querySelectorAll("#terneraSection img, #cerdoSection img, #corderoSection img");
        const cargandoTexto = document.querySelector(".cargando");
        const cargandoSimbolo = document.querySelector(".lds-facebook");
        let imagenesCargadas = 0;

        function imagenesCargadasHandler() {
            imagenesCargadas++;
            if (imagenesCargadas === imagenes.length) {
                cargandoTexto.style.display = "none";
                cargandoSimbolo.style.display = "none";
            }
        }

        imagenes.forEach(function(imagen) {
            imagen.addEventListener("load", imagenesCargadasHandler);
            imagen.addEventListener("error", imagenesCargadasHandler);
        });

       
    }

    // Fetch data from the microservice
    fetch('http://localhost:9000/productos/')
        .then(response => response.json())
        .then(data => {
            const groupedProducts = groupBy(data, 'categoria');
            updateSection('terneraList', groupedProducts['Ternera']);
            updateSection('cerdoList', groupedProducts['Cerdo']);
            updateSection('corderoList', groupedProducts['Cordero']);
            console.log(data);

            // After successful fetch, remove the 'DOMContentLoaded' event listener
            console.log("succesful fetch")
            var myDiv = document.getElementById("cargandoimg");
            var myDiv2 = document.getElementById("cargandotxt");
            console.log(myDiv)


// Check if the div exists before attempting to remove it
if (myDiv && myDiv2) {
    // Get the parent node of the div
    var parentElement = myDiv.parentNode;
    var parentElement2 = myDiv2.parentNode;

    // Remove the div from its parent
    parentElement.removeChild(myDiv);
    parentElement2.removeChild(myDiv2);
}

        })
        .catch(error => console.error('Error fetching data:', error));

    // Function to update a section with products
    function updateSection(sectionId, products) {
        const section = document.getElementById(sectionId);

        if (section && products) {
            products.forEach(product => {
                const corteDiv = document.createElement('div');
                corteDiv.classList.add('corte');

                const bordeDiv = document.createElement('div');
                bordeDiv.classList.add('borde');
                corteDiv.appendChild(bordeDiv);

                const fotoDiv = document.createElement('div');
                fotoDiv.classList.add('foto');
                const imgLink = document.createElement('a');
                imgLink.href = generateProductLink(product);
                const img = document.createElement('img');
                img.src = `../../img/${product.urlFeed}`;
                img.title = product.nombre;
                imgLink.appendChild(img);
                fotoDiv.appendChild(imgLink);

                const title = document.createElement('h3');
                title.textContent = product.nombre;

                const price = document.createElement('p');
                price.textContent = `${product.precio.toFixed(2)}€`;

                bordeDiv.appendChild(fotoDiv);
                bordeDiv.appendChild(title);
                bordeDiv.appendChild(price);

                section.appendChild(corteDiv);

                // Keep track of created elements
                createdElements.push(corteDiv);
            });
        }
    }

    // Function to generate the product link based on its category and name
    function generateProductLink(product) {
        return `${product.categoria.toLowerCase()}/${product.nombre.toLowerCase()}.php`;
    }

    // Attach the handleLoadedImages function to the DOMContentLoaded event
    document.addEventListener("DOMContentLoaded", handleLoadedImages);
};

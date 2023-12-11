window.onload = function () {
    // Fetch data from the microservice
    fetch('http://localhost:9000/productos')
        .then(response => response.json())
        .then(data => {
            // Group products by category
            const groupedProducts = groupBy(data, 'categoria');

            // Update each section with its respective products
            updateSection('terneraList', groupedProducts['Ternera']);
            updateSection('cerdoList', groupedProducts['Cerdo']);
            updateSection('corderoList', groupedProducts['Cordero']);
            console.log(data);
        })
        .catch(error => console.error('Error fetching data:', error));

    // Function to group an array of objects by a specified key
    function groupBy(array, key) {
        return array.reduce((result, item) => {
            (result[item[key]] = result[item[key]] || []).push(item);
            return result;
        }, {});
    }

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
            });
        }
    }

    // Function to generate the product link based on its category and name
    function generateProductLink(product) {
        return `${product.categoria.toLowerCase()}/${product.nombre.toLowerCase()}.php`;
    }
};

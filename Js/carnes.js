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
            console.log(data)
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
                const productDiv = document.createElement('div');
                productDiv.classList.add('corte', 'borde');

                // Create product content (image, title, price)
                const productContent = `
                    <div class="foto">
                        <a href="${generateProductLink(product)}">
                            <img src="../../img/${product.urlFeed}" title="${product.nombre}">
                        </a>
                    </div>
                    <h3>${product.nombre}</h3>
                    <p>${product.precio.toFixed(2)}€</p>
                `;

                productDiv.innerHTML = productContent;
                section.appendChild(productDiv);
            });
        }
    }

    // Function to generate the product link based on its category and name
    function generateProductLink(product) {
        return `${product.categoria.toLowerCase()}/${product.nombre.toLowerCase()}.php`;
    }
};

document.addEventListener('DOMContentLoaded', function () {
    // Fetch data from the microservice using Ajax
    fetch('http://localhost:9000/productos')
        .then(response => response.json())
        .then(data => {
            // Process the received JSON data and update HTML elements
            const productListElement = document.getElementById('productList');
            console.log(data)
            data.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.classList.add('corte', 'borde');

                const productImage = document.createElement('div');
                productImage.classList.add('foto');
                productImage.innerHTML = `<img src="../../img/${product.urlFeed}" title="${product.nombre}">`;

                const productName = document.createElement('h3');
                productName.textContent = product.nombre;

                const productPrice = document.createElement('p');
                productPrice.textContent = `${product.precio}€`;

                productDiv.appendChild(productImage);
                productDiv.appendChild(productName);
                productDiv.appendChild(productPrice);

                productListElement.appendChild(productDiv);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});

// window.onload = function () {
    // Obtén el ID del producto desde el atributo de datos del elemento HTML
    // const token = localStorage.getItem('token');
    // console.log(token);
    console.log("se ejecuta el script")
    const productId = getProductIdFromHtml();

    // Construye la URL del producto
    const productUrl = `http://localhost:9000/productos/${productId}`;
    fetch(productUrl
    //     , {
    //     headers: {
    //       'Authorization': `Bearer ${token}`,
    //     },
    //   }
      )
        .then(response => response.json())
        .then(productData => {
            // Populate HTML elements with product data
            document.getElementById('productTitle').textContent = productData.nombre;
            document.getElementById('productImage').src = `../../../img/${productData.urlFeed}`;
            document.getElementById('productPrice').textContent = `${productData.precio.toFixed(2)}€`;
            document.getElementById('productCategory').textContent = productData.categoria;

            const selectElement = document.getElementById('seleccion');
            productData.preparacion.forEach(preparation => {
                const option = document.createElement('option');
                option.value = preparation.idPreparacion;
                option.textContent = preparation.nombre;
                selectElement.appendChild(option);
            });

            // Set the href attribute for the product link
            const productLink = document.getElementById('productLink');
            const categoryLink = `<a href="../carnes.php#${productData.categoria}">${productData.categoria}</a>`;
            const productCategoryLink = `<a href="${productData.nombre.toLowerCase()}.php">${productData.nombre}</a>`;
            productLink.innerHTML = `<a href="../carnes.php">Carnes</a> > ${categoryLink} > ${productCategoryLink}`;
        })
        .catch(error => {
            console.error('Error al enviar los datos:', error);
            alert("Error base de datos")
        });
        function getProductIdFromHtml() {
            const sectionElement = document.querySelector('section');
            return sectionElement.dataset.productId;
        }
// };
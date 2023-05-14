class Carrito {
    // Añadir producto al carrito: 
    comprarProducto(e) {
        e.preventDefault()
        // Si se pulsa en el botón "Pedir"
        if (e.target.classList.contains('agregar-carrito')) {
            const producto = e.target.parentElement.parentElement;
            //Enviamos producto seleccionado para leer sus datos
            this.leerDatosProducto(producto)
        }
    }

    // Leer datos de los productos:
    leerDatosProducto(producto) {
        const infoProducto = {
            imagen: producto.querySelector('img').src,
            titulo: producto.querySelector('h5').textContent,
            precio: producto.querySelector('span').textContent,
            id: producto.querySelector('a').getAttribute('data-id'),
            cantidad: 1
        }

        // Evitamos añadir duplicados en la lista
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (productoLS) {
            if (productoLS.id === infoProducto.id) {
                productosLS = productoLS.id;
            }
        });

        if (productosLS === infoProducto.id) {
            Swal.fire({
                type: 'info',
                title: 'Oops...',
                text: 'El producto ya está agregado',
                showConfirmButton: false,
                timer: 2000
            })
        }
        else {
            this.insertarCarrito(infoProducto);
        }
    }

    // Insertar productos en el modal de carrito:
    insertarCarrito(producto) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>
                <img src="${producto.imagen}" width=100>
            </td>
            <td>
                <div class="product-selected">
                    <p>${producto.precio}</p>
                    <h6>${producto.titulo}</h6>
                </div>
            </td>
            <td>
                <a href="#" class="borrar-producto fa-solid fa-trash" data-id="${producto.id}"></a>
            </td>
        `;
        listaProductos.appendChild(row)
        this.guardarProductoLocalStorage(producto)
    }

    // Eliminar producto (trash button)
    eliminarProducto(e) {
        e.preventDefault();
        let producto, productoID;
        // Si damos en el botón de 'basura'
        if (e.target.classList.contains('borrar-producto')) {
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement
            productoID = producto.querySelector('a').getAttribute('data-id')
        }

        this.eliminarProductoLocalStorage(productoID)
    }

    //Elimina todos los productos del carrito
    vaciarCarrito(e) {
        e.preventDefault();

        // Mientras exista un elemento en nuestra lista, lo vamos a eliminar
        while (listaProductos.firstChild) {
            listaProductos.removeChild(listaProductos.firstChild);
        }
        this.vaciarLocalStorage()
        return false;
    }

    //Almacenar productos en el LocalStorage
    guardarProductoLocalStorage(producto) {
        let productos;
        //Toma valor de un arreglo con datos del LS
        productos = this.obtenerProductosLocalStorage();
        //Agregar producto al carrito
        productos.push(producto);
        //Agregamos al LocalStorage
        localStorage.setItem('productos', JSON.stringify(productos));

    }

    //Comprobar si hay elementos en LocalStorage
    obtenerProductosLocalStorage() {
        let productoLS;

        // Comprobamos si hay datos en el LocalStorage 
        if (localStorage.getItem('productos') === null) {
            productoLS = []
        } else {
            productoLS = JSON.parse(localStorage.getItem('productos'))
        }
        return productoLS
    }

    //Eliminar producto por ID del LS
    eliminarProductoLocalStorage(productoID) {
        let productosLS;
        //Obtenemos el array de productos
        productosLS = this.obtenerProductosLocalStorage();
        //Comparamos el id de producto borrado con LS
        productosLS.forEach(function (productoLS, index) {
            if (productoLS.id === productoID) {
                productosLS.splice(index, 1);
            }
        });
        //Añadimos el array actual al storage
        localStorage.setItem('productos', JSON.stringify(productosLS));
    }

    //Imprime los productos del LocalStorage en el modal carrito
    leerLocalStorage() {
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (producto) {
            //Construir el template        
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <img src="${producto.imagen}" width=100>
                </td>
                <td>
                    <div class="product-selected">
                        <p>${producto.precio}</p>
                        <h6>${producto.titulo}</h6>
                    </div>
                </td>
                <td>
                    <a href="#" class="borrar-producto fa-solid fa-trash" data-id="${producto.id}"></a>
                </td>
            `;
            listaProductos.appendChild(row)
        })
    }

    //Elimina los productos del LocalStorage
    vaciarLocalStorage() {
        localStorage.clear();
    }

    //Procesar compra hacia una página nueva
    procesarPedido(e) {
        e.preventDefault()

        // Si el carrito está vacío no me permite comprar nada: 
        if (this.obtenerProductosLocalStorage().length === 0) {
            Swal.fire({
                title: 'Oops...',
                text: 'El carrito está vacío',
                icon: "error",
                showConfirmButton: false,
                timer: 2000
            })
        } else {
            location.href = "shopping-cart.html"
        }
    }

            //================= NUEVA VENTANA =================

    // Imprime los productos del LocalStorage en el modal carrito
    leerLocalStorageCompra() {
        let productosLS;
        productosLS = this.obtenerProductosLocalStorage();
        productosLS.forEach(function (producto) {
            //Construir el template        
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>
                    <img src="${producto.imagen}" width=100>
                </td>
                <td>${producto.titulo}</td>
                <td>${producto.precio}</td>
                
                <td>
                    <input type="number" class="form-control cantidad" min="1" value=${producto.cantidad}>
                </td>
                <td id="total">${producto.precio * producto.cantidad}</td>
                <td>
                    <a href="#" class="borrar-producto fas fa-times-circle" style="font-size:30px" data-id="${producto.id}"></a>
                </td>
            `;
            listaCompra.appendChild(row);
        });
    }
}
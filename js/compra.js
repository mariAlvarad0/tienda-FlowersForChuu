const compra = new Carrito();
const listaCompra = document.querySelector('#lista-compra tbody');

function cargarEventos(){
    document.addEventListener('DOMContentLoaded', compra.leerLocalStorageCompra())
}

cargarEventos()
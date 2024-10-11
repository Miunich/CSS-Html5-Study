// "use strict";// Correr JS en modo estricto
//Objetos
const producto = {
    nombreProducto: "Monitor 20 Pulgadas",
    precio: 300,
    disponible: true
}

// Object.freeze(producto); //No se puede modificar el objeto
// producto.imagen = "imagen.jpg";

// console.log(Object.isFrozen(producto));

Object.seal(producto); //No se puede agregar ni eliminar propiedades
producto.precio = "Nuevo precio";

delete producto.precio; //No se puede eliminar

console.log(producto);
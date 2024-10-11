//Objetos
const producto = {
    nombreProducto: "Monitor 20 Pulgadas",
    precio: 300,
    disponible: true
}

//Forma anterior
// const precioProducto = producto.precio;
// const nombreProducto = producto.nombreProducto;

// console.log(precioProducto);
// console.log(nombreProducto);

//Destructuring
// const {precio} = producto;
// console.log(precio);
// const {nombreProducto} = producto;
// console.log(nombreProducto);

const {nombreProducto, precio, disponible} = producto;
console.log(nombreProducto);
console.log(precio);


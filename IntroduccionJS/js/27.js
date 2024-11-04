//POO

//Object Literal
const producto = {
    nombre: 'Tablet',
    precio: 500
}

//Object Constructor
function Cliente(nombre, apellido){
    this.nombre = nombre;
    this.apellido = apellido;
}

Cliente.prototype.formatearCliente = function(){
    return `El producto ${this.nombre}  ${this.apellido}`;
}
function Producto(nombre, precio){
    this.nombre = nombre;       //this.nombre puede tener cualquier nombre, pero se recomienda usar el mismo nombre del parametro
    this.precio = precio;
}

//Crear funciones que solo se utilizan en un objeto en especifico
Producto.prototype.formatearProducto = function(){
    return `El producto ${this.nombre} tiene un precio de: ${this.precio}`;
}
const cliente = new Cliente('Pedro', 'Perez');



const producto2 = new Producto('Monitor', 1000);
const producto3 = new Producto('Laptop', 1500);

console.log(cliente);
console.log(producto2);


console.log(producto2.formatearProducto());
console.log(producto3.formatearProducto());

// console.log(formatearProducto(producto2));


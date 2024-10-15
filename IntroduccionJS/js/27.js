//POO

//Object Literal
const producto = {
    nombre: 'Tablet',
    precio: 500
}

//Object Constructor
function Producto(nombre, precio){
    this.nombre = nombre;       //this.nombre puede tener cualquier nombre, pero se recomienda usar el mismo nombre del parametro
    this.precio = precio;
}

const producto2 = new Producto('Monitor', 1000);
const producto3 = new Producto('Laptop', 1500);

console.log(producto2);
console.log(producto3);

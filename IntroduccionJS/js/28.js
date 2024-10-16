//Classes


class Producto{
    constructor(nombre, precio){
        this.nombre = nombre;
        this.precio = precio;
    
    }
    formatearProducto(){
        return `El producto ${this.nombre} tiene un precio de: ${this.precio}`;
    }
    retornarPrecio(){
        console.log(this.precio);
    }
}
const producto = new Producto("Monitor Curvo", 1000);
const producto2 = new Producto("Laptop", 1500);

//Herencia
class Libro extends Producto{
    constructor(nombre, precio, isbn){
        super(nombre, precio);
        this.isbn = isbn;
    }
    formatearProducto(){
        return `${super.formatearProducto()} y su ISBN es ${this.isbn}`;
    }
    retornarPrecio(){
        super.retornarPrecio();
        console.log('Y si hay existencias');
    }
}


// class Libro{
//     constructor(nombre, precio, isbn){
//         this.nombre = nombre;
//         this.precio = precio;
//         this.isbn = isbn;
//     }
// }

const libro = new Libro("JavaScript la Revolución", 120, '123456');
console.log(libro.formatearProducto());
console.log(producto.formatearProducto());
console.log(producto2.formatearProducto());
console.log(libro.retornarPrecio());


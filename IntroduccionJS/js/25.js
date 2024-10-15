const carrito = [
    {nombre: 'Monitor 20 Pulgadas', precio: 500},
    {nombre: 'Television 50 Pulgadas', precio: 700},
    {nombre: 'Tablet', precio: 300},
    {nombre: 'Audifonos', precio: 200},
    {nombre: 'Teclado', precio: 50},
    {nombre: 'Celular', precio: 500},
    {nombre: 'Bocinas', precio: 300},
    {nombre: 'Laptop', precio: 800},
    
];

// ForEach
carrito.forEach(function(producto){
    // console.log(producto)
    console.log(producto.nombre)
});
carrito.forEach((producto)=>{//Arrow function igual a la anterior
    console.log(producto.nombre)
});

// Map
carrito.map((producto)=>console.log(producto.nombre)
);

const arreglo2 = carrito.map((producto)=>`${producto.nombre} - $${producto.precio}`);
console.log(arreglo2);
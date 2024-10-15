// Arrow Functions

const sumar2 = (n1,n2) => {
    console.log(n1 + n2);
}

sumar2(3,6);

const aprendiendo = tecnologia => {
    console.log(`Aprendiendo ${tecnologia}`);
}
aprendiendo('JavaScript');

//Array Methods

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

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

//forEach
meses.forEach(mes =>{
    if(mes === 'Marzo'){
        console.log('Marzo si existe');
    }
});

let resultado;
//Some ideal para arreglos de objetos
resultado = carrito.some((producto)=>{
    return producto.nombre === 'Celular';
});

console.log(resultado);

//Reduce
resultado = carrito.reduce((total, producto)=> total + producto.precio
, 0);
console.log(resultado);
//Filter
resultado = carrito.filter((producto)=>{
    return producto.precio > 400
});
console.log(resultado);
resultado = carrito.filter((producto)=>{
    return producto.nombre !== 'Celular'
});
console.log(resultado);

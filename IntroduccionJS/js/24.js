//For Loop

// for (let i = 0; i < 10; i++) {
//     console.log(i);
// }

// for (let i = 0; i < 10; i++) {
//     if (i % 2 ==0) {
//         console.log(`El numero ${i} es par`);
//         continue;
//     }
// }

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

for (let i = 0; i < carrito.length; i++) {
    // console.log(carrito[i].nombre, carrito[i].precio);
    console.log( carrito[i]);
}

//While Loop
let i=1; //indice

// while(i < 10){ //condición
//     // console.log(i);

//     if(i%2 === 0){
//         console.log(`El numero ${i} es par`);
//     }

//     i++;
// }

while(i < carrito.length){
    console.log(carrito[i].nombre);
    i++;
}


//Do While Loop

let j = 0;

do {
    console.log(j);
    j++;
} while (j < 10);
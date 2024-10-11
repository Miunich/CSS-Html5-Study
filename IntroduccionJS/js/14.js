// Arreglos o Arrays
// Un arreglo es una colección de elementos que se almacenan en una sola variable.
const numeros = [10, 20, 30, 40, 50];
// console.table(numeros);

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

// console.log(meses);

// const arreglo = ["Hola", 10, true, "si", null, {nombre: "Juan", trabajo: "Programador"}, [1,2,3]];

// console.log(arreglo);

// // Acceder a los valores de un arreglo
// console.log(meses[0]);

// // Conocer la extensión de un arreglo
// console.log(meses.length);

// meses.forEach(function(mes){
//     console.log(mes);
// });

// numeros[5] = 60;
// numeros[6] = 70;

// numeros.push(60); // Agrega al final del arreglo
// numeros.unshift(-10,-20,-30); // Agrega al inicio del arreglo
// meses.pop(); // Elimina el último elemento del arreglo
// meses.shift(); // Elimina el primer elemento del arreglo
// console.table(numeros);
// meses.splice(2,1); // Elimina un elemento en la posición indicada

// console.table(meses);

// Rest Operator o Spread Operator

const nuevoArreglo = [...meses, 'Junio'];
const nuevoArreglor = ['Diciembre',...meses ];
console.log(nuevoArreglor);
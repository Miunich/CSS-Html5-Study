// String o Cadenas de texto

const producto = 'Monitor 20 Pulgadas';
const producto2 = String('Monitor 30 Pulgadas');
const producto3 = new String('Monitor 50 Pulgadas');

console.log(producto);
console.log(producto2.length); // Longitud de la cadena
console.log(producto3); // Este es un objeto

//Indexof retorna la posición de la palabra en la cadena
console.log(producto.indexOf('Pulgadas')); // Posición de la palabra en la cadena

// Includes retorna true o false si la palabra existe en la cadena
console.log(producto.includes('Pulgadas'));
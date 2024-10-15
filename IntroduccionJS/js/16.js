//Declaración de funcion

function sumar(){
    console.log(2 + 2);
}
sumar();

//Expresión de función
const sumar2 = function(){
    console.log(3 + 3);
}
sumar2();

//IIFE
(function(){
    console.log("Esto es una función IIFE");
})();

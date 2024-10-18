// querySelector
const heading = document.querySelector('.header__texto h2');// 0 a 1 elemento
console.log(heading);
heading.textContent = 'Nuevo Heading';


// querySelectorAll
const enlaces = document.querySelectorAll('.navegacion a');
console.log(enlaces);
enlaces[0].textContent = 'Nuevo Texto para Enlace';
// enlaces[0].href = "http://www.google.com";
enlaces[0].classList.add('nueva-clase'); // Agregar una clase
// enlaces[0].classList.remove('navegacion__enlace'); // Eliminar una clase

// Generar un nuevo enlace
const nuevoEnlace = document.createElement('A')//etiqueta con mayúscula

// Agregar el href
nuevoEnlace.href = 'nuevo-enlace.html';
//Agregar el texto
nuevoEnlace.textContent = 'Un nuevo enlace';
//Agregar la clase
nuevoEnlace.classList.add('navegacion__enlace');

console.log(nuevoEnlace);


//Eventos

console.log(1);

window.addEventListener('load', function() {//load que el JS y los archivos que dependen de el HTML estén listos
    console.log(2);
});

window.onload = function() {
    console.log(3);
}

document.addEventListener('DOMContentLoaded', function() {//solo espera que se descargue el HTML y no espera CSS o imagenes
    console.log(4);
});

console.log(5);


window.onscroll = function() {
    console.log('scrolling...');
}

// Seleccionar elementos y asociarles un evento

// const btnEnviar = document.querySelector('.boton--primario');
// btnEnviar.addEventListener("click", function(evento) {
//     console.log(evento);
//     evento.preventDefault();//previene la acción por defecto

//     //Validar un formulario

//     console.log('Enviando formulario...');
// });



// Eventos de los Inputs y Textarea

const datos = {
    nombre: '',
    email: '',
    mensaje: ''
}


const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');
const formulario = document.querySelector('.formulario');

nombre.addEventListener('input', leer);
email.addEventListener('input', leer);
mensaje.addEventListener('input', leer);

// email.addEventListener('input', function(e) {
//     console.log(e.target.value); // para saber lo que esta escribiendo el usuario
// });

// mensaje.addEventListener('input', function(e) {
//     console.log(e.target.value); // para saber lo que esta escribiendo el usuario
// });


//Eventos de Submit
formulario.addEventListener('submit', function(evento) {
    evento.preventDefault();
    //Validar el formulario

    const {nombre, email, mensaje} = datos;

    if(nombre === '' || email === '' || mensaje === '') {
        mostrarAlerta('Todos los campos son obligatorios', true);
        return;
    }

    //Crear la alerta de Enviar Correctamente el formulario

    mostrarAlerta('Mensaje enviado correctamente');
});

function leer(e){
    // console.log(e.target.value)

    // console.log(e.target)

    datos[e.target.id] = e.target.value;

    // console.log(datos);
}

function mostrarAlerta(mensaje, error = null) {
    const alerta = document.createElement('P')
    alerta.textContent = mensaje;

    if(error) {
        alerta.classList.add('error');
    } else {
        alerta.classList.add('correcto');
    }

    formulario.appendChild(alerta);

    //Desaparecer después de 5 segundos
    setTimeout(() => {
        alerta.remove();
    }, 5000);
}

// //Muestra una alerta de que se envió correctamente
// function mostrarMensaje(mensaje) {
//     const mensajeAlerta = document.createElement('P');
//     mensajeAlerta.textContent = mensaje;
//     mensajeAlerta.classList.add('correcto');

//     formulario.appendChild(mensajeAlerta);

//     setTimeout(() => {
//         mensajeAlerta.remove();
//     }, 5000);
// }

// //Muestra un error en pantalla
// function mostrarError(mensaje){
//     const error = document.createElement('P');
//     error.textContent = mensaje;
//     error.classList.add('error');

//     console.log(error);

//     formulario.appendChild(error);

//     //Eliminar el mensaje de error después de 5 segundos
//     setTimeout(() => {
//         error.remove();
//     }, 5000);
// }

const boton = document.querySelector('button');
boton.addEventListener('click', () => {
    // console.log('Diste click en el botón');
    Notification.requestPermission()
        .then(resultado => console.log(`El resultado es: ${resultado}`));
    });

if(Notification.permission == 'granted') {
    new Notification('Esta es una notificación', {
        icon: 'img/1.jpg',
        body: 'Esto es una notificación, avisando que se ha realizado una acción'
    });
}


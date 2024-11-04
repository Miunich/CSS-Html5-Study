const reproductor = {
    reproducir: function(id) {//reproducinedo cancion con ID
        console.log(`Reproduciendo canción con el ID: ${id}`);
    },
    pausar: function() {//pausando cancion
        console.log('Pausando...');
    },
    crearPlaylist: function(nombre) {//creando playlist
        console.log(`Creando la playlist de ${nombre}`);
    },
    reproducirPlaylist: function(nombre) {//creando playlist
        console.log(`Reproduciendo la playlist de ${nombre}`);
    },
}

reproductor.borrarCancion = function(id) {//borrando cancion con ID
    console.log(`Borrando canción... ${id}`);
}

console.log(reproductor);

reproductor.reproducir(3840);
reproductor.pausar();
reproductor.borrarCancion(20);
reproductor.crearPlaylist('Heavy Metal');
reproductor.reproducirPlaylist('Heavy Metal');
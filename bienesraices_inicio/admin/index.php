<?php

//importar la conexion


//Escribir el query


//Consultar la base de datos


//Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;
// echo"<pre>";
// var_dump($resultado);
// echo "</pre>";
// exit();

//incluye un template
include '../includes/templates/header.php';
?>


<main class="contenedor seccion">
    <h1>Administrador de Bienes Raíces</h1>
    <?php if($resultado == '1'): ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
     <?php endif ?>

    <a href="/admin/propiedades/crear.php" class="boton boton-verde" > Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>Acciones</th>
            </tr>
        </thead>

        <tbody><!--Mostrar los resultados-->
            <tr>
                <td>1</td>
                <td>Casa en la playa</td>
                <td> <img src="/imagenes/anuncio1.jpg" alt="" class="imagen-tabla"></td>
                <td>$1200000</td>
                <td>
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                    <a href="#" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>

<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <?php
        include '../includes/templates/footer.php';
        ?>
    </div>

    <p class="copyright">Todos los derechos Reservador 2024 &copy;</p>
</footer>
<script src="/build/js/bundle.min.js"></script>
<?php
    //Cerrar la conexion
    
?>


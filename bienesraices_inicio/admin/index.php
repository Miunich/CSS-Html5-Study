<?php



//importar la conexion
require '../includes/config/database.php';
$db = conectarDB();

//Escribir el query
$query = "SELECT * FROM propiedades";

//Consultar la base de datos
$resultadoConsulta = mysqli_query($db, $query);

//Muestra mensaje condicional
$resultado = $_GET['resultado'] ?? null;


//incluye un template
require '../includes/funciones.php';
include '../includes/templates/header.php';
?>


<main class="contenedor seccion">
    <h1>Administrador de Bienes Raíces</h1>
    <?php if($resultado == '1'): ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php elseif($resultado == '2'): ?>
        <p class="alerta exito">Anuncio actualizado correctamente</p>    
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
            <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
            <tr>
                <td><?php echo $propiedad['id']; ?></td>
                <td><?php echo $propiedad['titulo']; ?></td>
                <td> <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="" class="imagen-tabla"></td>
                <td>$ <?php echo $propiedad['precio']; ?></td>
                <td>
                    <a href="#" class="boton-rojo-block">Eliminar</a>
                    <a href="propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">Actualizar</a>
                </td>
            </tr>
            <?php endwhile; ?>
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
    mysqli_close($db);
?>


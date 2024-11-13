<?php
//Base de datos
require '../../includes/config/database.php';

$db = conectarDB();

//Arreglo con mensajes de errores
$errores = [];

//Ejecutar el codigo despues de que el usuario envie el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedor_id = $_POST['vendedor'];

    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }
    if (!$precio) {
        $errores[] = "Debes añadir un precio";
    }
    
    if (strlen($descripcion) < 50) {
        $errores[] = "Debes añadir una descripción";
    } 
    if (!$habitaciones) {
        $errores[] = "Debes añadir el número de habitaciones";
    } 
    if (!$wc) {
        $errores[] = "Debes añadir el número de baños"; 
    }
    if (!$estacionamiento) {
        $errores[] = "Debes añadir el número de estacionamientos";
    } 
    if (!$vendedor_id) {
        $errores[] = "Debes añadir un vendedor";
    }

    echo "<pre>";
    var_dump($errores);
    echo "</pre>";

    exit;
    
    //Insertar en la base de datos
    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedor_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedor_id')";

    // echo $query;
    $resultado = mysqli_query($db, $query);

    if($resultado){
        echo "Insertado Correctamente";
    }

}
require '../../includes/funciones.php';
include '../../includes/templates/header.php';
?>


<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde"> Volver</a>

    <form action="" class="formulario" method="POST" action="/admin/propiedades/crear.php">

        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" ></textarea>

        </fieldset>

        <fieldset>

            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej. 3" min="1" max="9">
            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej. 2" min="1" max="3">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej. 2" min="1" max="3">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor" id="vendedor">
                <option value="" disabled selected>-- Seleccione --</option>
                <option value="1">Juan</option>
                <option value="2">Karen</option>
            </select>

        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <?php
        include '../../includes/templates/footer.php';
        ?>
    </div>

    <p class="copyright">Todos los derechos Reservador 2024 &copy;</p>
</footer>
<script src="/build/js/bundle.min.js"></script>
</body>

</html>
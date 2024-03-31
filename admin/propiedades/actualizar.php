<?php
//Validar la URL por id válido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /bienesraices/admin/index.php');
}

// Base de Datos
require '../../includes/config/database.php';
$db = conectarDb();

//Obtener los datos de la propiedad
$consulta = "SELECT * FROM propiedad WHERE id = $id";
$resultado = mysqli_query($db, $consulta);
$propiedad = mysqli_fetch_assoc($resultado);

//Consultar para obtener vendedores
$consulta = "SELECT * FROM vendedor";
$resultado = mysqli_query($db, $consulta);

//Arreglo con mensajes de errores
$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitacion = $propiedad['habitacion'];
$wc = $propiedad['wc'];
$garaje = $propiedad['garaje'];
$vendedor_id = $propiedad['vendedor_id'];
$imagenPropiedad = $propiedad['imagen'];

//Ejecutar el codig odespues que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    // echo '<pre>';
    // var_dump($_FILES);
    // echo '</pre>';

    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitacion = mysqli_real_escape_string($db, $_POST['habitacion']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $garaje = mysqli_real_escape_string($db, $_POST['garaje']);
    $vendedor_id = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = date('Y/m/d');

    //Asignar files hacia una variable
    $imagen = $_FILES['imagen'];

    if (!$titulo) {
        $errores[] = 'Debes añadir un título';
    }
    if (!$precio) {
        $errores[] = 'Debes añadir un precio';
    }
    if (strlen($descripcion) < 50) {
        $errores[] = 'La descripción debe tener al menos 50 caracteres';
    }
    if (!$habitacion) {
        $errores[] = 'El número de habitaciones es obligatorio';
    }
    if (!$wc) {
        $errores[] = 'El número de baños es obligatorio';
    }
    if (!$garaje) {
        $errores[] = 'El número de garajes es obligatorio';
    }
    if (!$vendedor_id) {
        $errores[] = 'Elige un vendedor';
    }

    //Validar por tamaño (100kb maximo)
    $medida = 1000 * 1000;
    if ($imagen['size'] > $medida) {
        $errores[] = 'La imagen es muy pesada';
    }

    // echo '<pre>';
    // var_dump($errores);
    // echo '</pre>';

    //Revisar el arreglo de errores
    if (empty($errores)) {

        //Subida de archivos
        //Crear una carpeta
        // $carpetaImagenes = '../../imagenes/';
        // if (!is_dir($carpetaImagenes)) {
        //     mkdir($carpetaImagenes);
        // }

        // //Generar nombre unico
        // $nombreImagen = md5(uniqid(rand(), true));

        // //Subir la imagen
        // move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen . '.jpg');

        //Insertar en la Base de Datos
        $query = "UPDATE propiedad SET titulo = '$titulo', precio = '$precio', descripcion = '$descripcion', habitacion = $habitacion, wc = $wc, garaje = $garaje, vendedor_id = $vendedor_id WHERE id = $id" ;

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            header('Location: /bienesraices/admin/index.php?resultado=2');
        }
    }
}

require '../../includes/funciones.php';
includeTemplate('header');
?>
<main class="contenedor seccion">
    <h2>Actualizar</h2>
    <a href="../index.php" class="boton boton-secundario">Regresar</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

    <?php endforeach; ?>

    <form class="formulario" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Título de la propiedad" value="<?php echo $titulo ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio" value="<?php echo $precio ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <img class="imagen-small" src="../../imagenes/<?php echo $imagenPropiedad . '.jpg'; ?>" alt="">

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion" placeholder="Descripción"><?php echo $descripcion ?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitacion" placeholder="Ejem: 3" min="1" max="9" value="<?php echo $habitacion ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ejem: 2" min="1" max="5" value="<?php echo $wc ?>">

            <label for="garaje">Garajes:</label>
            <input type="number" id="garaje" name="garaje" placeholder="Ejem: 2" min="1" max="5" value="<?php echo $garaje ?>">
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option selected disabled value="">-- Seleccione --</option>
                <?php while ($row = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedor_id === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] . ' ' . $row['apellido']; ?></option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="actualizar propiedad" class="boton boton-secundario">
    </form>
</main>
<?php
includeTemplate('footer');
?>
<?php
//Importar la conexion
require '../includes/config/database.php';
$db = conectarDb();

//Escribir query
$query = "SELECT * FROM propiedad";

//Consultar la DB
$resultadoConsulta = mysqli_query($db, $query);

//Mensaje condicional
$resultado = $_GET['resultado'] ?? null;

require '../includes/funciones.php';
includeTemplate('header');
?>
<main class="contenedor seccion">
    <h2>Administrador Bienes Raices</h2>
    <?php if( intval($resultado) === 1): ?>
        <p class="alerta exito">Propiedad creada correctamente</p>
    <?php elseif( intval($resultado) === 2): ?>    
        <p class="alerta exito">Propiedad actualizada correctamente</p>
    <?php endif; ?>
    <a href="../admin/propiedades/crear.php" class="boton boton-secundario">Nueva Propiedad</a>

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
        <tbody> <!-- Mostrar los resultados-->
        <?php while($propiedad = mysqli_fetch_assoc($resultadoConsulta)): ?>
            <tr>
                <td><?php echo $propiedad['id']; ?></td>
                <td><?php echo $propiedad['titulo']; ?></td>
                <td><img class="imagen-tabla" src="../imagenes/<?php echo $propiedad['imagen'] . ".jpg"; ?>" alt="imagen-propiedad"></td>
                <td>$ <?php echo $propiedad['precio']; ?></td>
                <td>
                    <a href="#" class="boton-rojo-delete">Eliminar</a>
                    <a href="../admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-update">Actualizar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>
<?php

//Cerrar la conexion
mysqli_close($db);

includeTemplate('footer');
?>
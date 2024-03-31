<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices | Inicio</title>
    <link rel="stylesheet" href="/bienesraices/build/css/app.css">
    <link rel="icon" href="/bienesraices/favicon.ico">
    <script src="/bienesraices/build/js/bundle.min.js"></script>
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <div class="bloque-1">
                    <a href="/bienesraices/index.php" class="logo">
                        <h1>Bienes<span>Raices</span></h1>
                    </a>
                    <div class="mobile-menu">
                        <img src="/bienesraices/build/img/menu.svg" alt="icono-menu-responsive">
                    </div>
                </div>
                <nav class="navegacion">
                    <a href="nosotros.php"> Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                    <img class="dark-mode-button" src="/bienesraices/build/img/dark-mode.svg" alt="icono-dark-mode">
                </nav>
            </div> <!--Barra-->
            <?php if ($inicio) { ?>
                <h2>Venta de Casas y Departamentos Exclusivos de Lujo</h2>
            <?php } ?>
        </div>
    </header>
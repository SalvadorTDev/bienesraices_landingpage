<?php
require 'includes/funciones.php';
includeTemplate('header');
?>
<main class="contenedor seccion">
    <h2>Sobre Nosotros</h2>
    <div class="sobre-nosotros">
        <picture>
            <source srcset="build/img/nosotros.webp" type="image/webp">
            <source srcset="build/img/nosotros.jpg" type="image/jpeg">
            <img src="build/img/nosotros.jpg" alt="imagen sobre nosotros" loading="lazy">
        </picture>
        <div class="nosotros-texto">
            <h3>25 Años de Experiencia</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, amet minima aut perferendis, tenetur
                aliquam aperiam dolore atque rerum, dolorem illum suscipit facilis voluptates? Laudantium saepe
                officiis ullam adipisci id!
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum harum illo nobis error nesciunt
                consequuntur exercitationem reiciendis, corporis eius eveniet aperiam doloribus maiores! Quis
                aliquam cumque odio vero accusantium non. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Eum, repellat soluta consectetur fugit minus, quo et architecto veniam corporis voluptates vero
                aliquid! Eaque aperiam consequuntur reiciendis perspiciatis exercitationem repellat? Quisquam?
            </p>
        </div>
    </div>
</main>
<section class="contenedor">
    <h2>Más Sobre Nosotros</h2>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/security.svg" alt="icono-seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Nemo quos dolorem repellat ab accusantium adipisci doloremque voluptas eligendi commodi, repellendus
                veniam facere, aliquam expedita tenetur porro praesentium natus ut debitis.</p>
        </div>
        <div class="icono">
            <img src="build/img/coins.svg" alt="icono-precio" loading="lazy">
            <h3>Precio</h3>
            <p>Nemo quos dolorem repellat ab accusantium adipisci doloremque voluptas eligendi commodi, repellendus
                veniam facere, aliquam expedita tenetur porro praesentium natus ut debitis.</p>
        </div>
        <div class="icono">
            <img src="build/img/clock-24.svg" alt="icono-tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Nemo quos dolorem repellat ab accusantium adipisci doloremque voluptas eligendi commodi, repellendus
                veniam facere, aliquam expedita tenetur porro praesentium natus ut debitis.</p>
        </div>
    </div>
</section>
<?php
includeTemplate('footer');
?>
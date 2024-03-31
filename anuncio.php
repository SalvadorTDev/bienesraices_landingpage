<?php
require 'includes/funciones.php';
includeTemplate('header');
?>
<main class="contenedor seccion">
    <h2>Casa en venta frente al bosque</h2>
    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img src="build/img/destacada.jpg" alt="destacada 1" loading="lazy">
    </picture>
    <div class="resumen-propiedad">
        <p class="precio">$3'000,000</p>
        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" src="build/img/bath.svg" alt="icono baño" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/car-garage.svg" alt="icono garaje" loading="lazy">
                <p>3</p>
            </li>
            <li>
                <img class="icono" src="build/img/bed.svg" alt="icono dormitorio" loading="lazy">
                <p>3</p>
            </li>
        </ul>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quaerat nemo sequi laudantium sapiente
            maxime! Vero laudantium magni, placeat totam facere laboriosam illum vitae tenetur. Quasi nobis
            temporibus voluptates aspernatur.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat, hic repudiandae sapiente et numquam
            voluptates dignissimos nobis nemo. Nesciunt suscipit doloremque animi rem repudiandae sequi illum
            dolorum deleniti aliquam repellendus?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam hic necessitatibus a? Voluptatibus
            aspernatur, sequi quas iure voluptatum quidem ut pariatur molestias corporis ducimus hic voluptatem,
            animi blanditiis ipsa dolorum!
        </p>
    </div>
</main>
<?php
includeTemplate('footer');
?>
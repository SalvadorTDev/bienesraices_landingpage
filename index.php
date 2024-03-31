<?php
require 'includes/funciones.php';
includeTemplate('header', $inicio = true);
?>
<main class="contenedor seccion">
    <h2>Más Sobre Nosotros</h2>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/security.svg" alt="icono-seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Nemo quos dolorem repellat ab accusantium adipisci doloremque voluptas eligendi commodi, repellendus veniam facere, aliquam expedita tenetur porro praesentium natus ut debitis.</p>
        </div>
        <div class="icono">
            <img src="build/img/coins.svg" alt="icono-precio" loading="lazy">
            <h3>Precio</h3>
            <p>Nemo quos dolorem repellat ab accusantium adipisci doloremque voluptas eligendi commodi, repellendus veniam facere, aliquam expedita tenetur porro praesentium natus ut debitis.</p>
        </div>
        <div class="icono">
            <img src="build/img/clock-24.svg" alt="icono-tiempo" loading="lazy">
            <h3>A Tiempo</h3>
            <p>Nemo quos dolorem repellat ab accusantium adipisci doloremque voluptas eligendi commodi, repellendus veniam facere, aliquam expedita tenetur porro praesentium natus ut debitis.</p>
        </div>
    </div>
</main>
<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>
    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio1.webp" type="image/webp">
                <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                <img src="build/img/anuncio1.jpg" alt="anuncio 1" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de Lujo en el Lago</h3>
                <p>Casa en el lago, excelente vista, con acabados y excelente precio.</p>
                <p class="precio">$ 3'000,000</p>
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
                <a class="boton-secundario-block" href="/anuncios.html">Ver Propiedad</a>
            </div><!--Contenido anuncio-->
        </div><!--Anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio2.webp" type="image/webp">
                <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                <img src="build/img/anuncio2.jpg" alt="anuncio 1" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa Acabado de Lujo</h3>
                <p>Casa con diseño moderno, tecnología inteligente y amoblada.</p>
                <p class="precio">$ 2'000,000</p>
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
                <a class="boton-secundario-block" href="/anuncios.html">Ver Propiedad</a>
            </div><!--Contenido anuncio-->
        </div><!--Anuncio-->
        <div class="anuncio">
            <picture>
                <source srcset="build/img/anuncio3.webp" type="image/webp">
                <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                <img src="build/img/anuncio3.jpg" alt="anuncio 1" loading="lazy">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa con Alberca</h3>
                <p>Casa con alberca y acabados de lujo, excelente oportunidad.</p>
                <p class="precio">$ 3'000,000</p>
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
                <a class="boton-secundario-block" href="/anuncios.html">Ver Propiedad</a>
            </div><!--Contenido anuncio-->
        </div><!--Anuncio-->
    </div><!--Contenedor anuncios-->
    <div class="alinear-derecha">
        <a class="boton-rojo" href="/anuncios.html">Ver Todas</a>
    </div>
</section>
<section class="imagen-contacto">
    <h2>Encuentra la Casa de tus Sueños</h2>
    <p>Llena el formulario y un asesor se pondrá en contacto contigo a la brevedad.</p>
    <a class="boton-secundario" href="contacto.html">Contáctanos</a>
</section>
<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="blog 1" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en tu casa</h4>
                    <p>Escrito el: <span>09/09/2023</span> por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y al mejor precio.</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="blog 2" loading="lazy">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>09/09/2023</span> por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, veritatis obcaecati inventore qui porro voluptatem laborum necessitatibus soluta voluptates?</blockquote>
            <p>Anónimo</p>
        </div>
    </section>
</div>
<?php
includeTemplate('footer');
?>
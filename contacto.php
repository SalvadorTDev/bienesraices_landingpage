<?php
require 'includes/funciones.php';
includeTemplate('header');
?>
<main class="contenedor seccion">
    <h2>Contacto</h2>
    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
    </picture>

    <h3>Llene el Formulario</h3>

    <form class="formulario">
        <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" placeholder="Tu Nombre">

            <label for="email">Email</label>
            <input id="email" type="email" placeholder="Tu Email">

            <label for="telefono">Teléfono</label>
            <input id="telefono" type="tel" placeholder="Tu Telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" cols="30" rows="10"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Sobre la Propiedad</legend>

            <label for="opciones">Compra o Venta</label>
            <select id="opciones">
                <option value="compra" disabled selected>-- Seleccione --</option>
                <option value="compra">Compra</option>
                <option value="venta">Venta</option>
            </select>

            <label for="presupuesto">Precio</label>
            <input id="presupuesto" type="number" placeholder="Tu Presupuesto">
        </fieldset>

        <fieldset>
            <legend>Información de Contacto</legend>

            <p>¿Cómo desea ser contactado?</p>
            <div class="forma-contacto">
                <label for="contactar-telefono">Telefono</label>
                <input name="contacto" type="radio" id="contactar-telefono" value="telefono">

                <label for="contactar-email">Email</label>
                <input name="contacto" type="radio" id="contactar-email" value="email">
            </div>
            <p>Si eligió teléfono, escoja la fecha y hora</p>
            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">

            <label for="contactar-email">Hora</label>
            <input type="time" id="hora" min="09:00" max="20:00">
        </fieldset>
        <input type="submit" value="enviar" class="boton-secundario">
    </form>
</main>
<?php
includeTemplate('footer');
?>
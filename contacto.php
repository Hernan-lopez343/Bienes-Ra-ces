<?php

require 'includes/funciones.php'; 

    
    incluirtemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>
        <h2>Llene el formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu correo electrónico" id="email">

                <label for="telefono">Número de Telefono</label>
                <input type="tel" placeholder="Tu Teléfono" id="telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje"></textarea>
            </fieldset>
            <fieldset>
                <legend>Informacion Sobre la Propiedad</legend>
                <label for="opciones">Vende o Compra:</label>
                <select id="opciones">
                    <option value=" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>
                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Precio o Presupuesto" id="presupuesto">
            </fieldset>
            <fieldset>
                <legend>Informacion de la Propiedad</legend>
                <p>Como desea ser Contactado:</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    <label for="contactar-email">Correo Electrónico</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si ha elegido teléfono, elija fecha y hora para que lo contactemos</p>  
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="08:30" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>
     </main>
     <?php
   
   incluirtemplate('footer');
   ?>
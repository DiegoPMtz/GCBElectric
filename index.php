<?php

require 'includes/funciones.php';

incluirTemplate('header', $inicio = true);

?>


<main class="contenedor seccion">
    <h1>Porque comprar con nosotros...</h1>
    <div class="iconos-nosotros">
        <div class="iconos">
            <img src="build/img/icono3.svg" alt="Icono reloj" loading="lazy">
            <h3>Rapidez</h3>
            <p>En el equipo de GCB Electric tenemos personal altamente calificado el cual le proporcionara una atencion rapida y
                eficaz contando con un sistema de respuesta rapida ante dudas, cotizaciones, envios y mas...
            </p>
        </div>

        <div class="iconos">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>En GCB Electric nos preocupamos por su economia y por ello siempre procuramos manejar precios competitivos
                para nuestros clientes mejorando el precio de la competencia sin perder la calidad del producto.
            </p>
        </div>

        <div class="iconos">
            <img src="build/img/icono1.svg" alt="Icono candado" loading="lazy">
            <h3>Seguridad</h3>
            <p>Nuestros clientes son lo mas importante para nosotros y sobre todo que cuenten con la confianza 
                en que sus productos saldran de nuestros almacenes en tiempo y forma.</p>
        </div>

    </div>
</main>

<?php
incluirTemplate('footer');
?>
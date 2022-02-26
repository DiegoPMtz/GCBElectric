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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum earum ipsam nam temporibus
                consectetur alias, harum eligendi ea ullam perspiciatis saepe aspernatur totam ad unde
                similique officiis. Accusamus, deserunt nihil.</p>
        </div>

        <div class="iconos">
            <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum earum ipsam nam temporibus
                consectetur alias, harum eligendi ea ullam perspiciatis saepe aspernatur totam ad unde
                similique officiis. Accusamus, deserunt nihil.</p>
        </div>

        <div class="iconos">
            <img src="build/img/icono1.svg" alt="Icono candado" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum earum ipsam nam temporibus
                consectetur alias, harum eligendi ea ullam perspiciatis saepe aspernatur totam ad unde
                similique officiis. Accusamus, deserunt nihil.</p>
        </div>

    </div>
</main>

<?php
incluirTemplate('footer');
?>
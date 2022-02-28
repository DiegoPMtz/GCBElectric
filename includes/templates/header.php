<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCB Electric</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img class="logo" src="/build/img/gcb.png" alt="Logo GCB">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Icono menu hamburguesa">
                    
                </div>

                <div class="derecha">
                    	<img src="/build/img/dark-mode.svg" class="dark-mode-botton">
                        
                        <nav class="navegacion">
                            <a href="quienes_somos.php">Quienes somos</a>
                            <a href="productos.php">Productos</a>
                            <a href="contacto.php">Contacto</a>
                        </nav>
                    </div>
            </div> <!--/Barra-->
            <?php echo $inicio ? '<h1>Lideres Proveedores Integrales</h1>' : ''; ?>
        </div> 
    </header>
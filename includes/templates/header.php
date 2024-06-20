<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
    <div class="contenido contenido-header"> 
        <div class="barra">
            <a href="index.php">
                <img src="/build/img/logo.svg" alt="logo de bienes raices">
            </a>
            <div class="mobile-menu">
                <img src="/build/img/barras.svg" alt="Icono Menu"> 

            </div>
            <div class="derecha"> 
                <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                <nav class="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>
            
        </div>
    </div> <!--Cierre de Barra-->
    <?php if ($inicio){?>
    <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
    <?php }?>
    </header>
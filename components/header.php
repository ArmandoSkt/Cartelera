<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peli-Express</title>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    <header class="header">
        <div class="contenedor">
            <h1 class="logo">
                <a href="index.php"><img src="img/logo.png" style="width: 80px;" alt=""></a>
            </h1>
            <nav class="menu">
                <a href="index.php">Home</a>
                <a href="estrenos.php">Estrenos</a>
                <div class="menu__cartegorias">
                    <p class="">Categorias <b class="fa fa-caret-up"></b></p>
                    <ul >
                        <li><a href="horror.php?categoria=horror">Horror</a></li>
                        <li><a href="fantasia.php?categoria=fantasia">Fantasía</a></li>
                        <li><a href="misterio.php?categoria=misterio">Misterio</a></li>
                        <li><a href="musica.php?categoria=musica">Música</a></li>
                        <li><a href="romance.php?categoria=romance">Romance</a></li>
                        <li><a href="historia.php?categoria=historia">Historia</a></li>
                        <li><a href="animacion.php?categoria=animacion">Animación</a></li>
                        <li><a href="drama.php?categoria=drama">Drama</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>
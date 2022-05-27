<?php
$nombre  = $_GET['nombre'];
$output = `swipl -s T4Proyecto.pl -g "clic('$nombre'). -t halt."`;

$info = explode("*", $output);
$recom = `swipl -s T4Proyecto.pl -g "recomendaciones('$nombre', '$info[2]'). -t halt."`;
$peliculasRecomendadas = explode("/", $recom);

require_once "components/header.php";
?>
<main>
    <div class="contenedor">
        <section class="info__pelicula">
            <div class="info__pelicula-img">
                <img src="img/<?php echo $nombre ?>.jpg" alt="">
            </div>
            <div class="info__pelicula-descripcion">
                <h2><?php echo $nombre ?></h2>
                <hr>
                <h4>Sinopsis:</h4>
                <p><?php echo $info[3] ?></p>
                <h4>Actores:</h4>
                <p><?php echo $info[4] ?></p>
                <h4>Duración:</h4>
                <p><?php echo $info[5] ?></p>
                <h4>Idioma:</h4>
                <p><?php echo $info[6] ?></p>
                <h4>Año:</h4>
                <p><?php echo $info[7] ?></p>
                <h4>Precio:</h4>
                <p><?php echo $info[1] ?></p>
                <a class="boton" href="https://www.amazon.com/" target="_blank">Comprar</a>
            </div>
        </section>

        <h2 class="centrar-texto">Películas que te pueden gustar</h2>
        <hr>
        <section class="contenedor__peliculas">
            <?php foreach ($peliculasRecomendadas as $i => $infoPelicula) {
                $pelicula = explode("*", $infoPelicula);
                if ($i == 4) break; ?>
                <article class="pelicula">
                    <a href="clic.php?nombre=<?php echo $pelicula[0] ?>">
                        <img src="img/<?php echo $pelicula[0] ?>.jpg" alt="">
                        <h4><?php echo $pelicula[0]; ?></h4>
                        <p> Precio: <b><?php echo $pelicula[1]; ?></b></p>
                    </a>
                </article>
            <?php } ?>
        </section>
    </div>
</main>




<?php require_once "components/footer.php"; ?>
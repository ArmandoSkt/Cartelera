<?php
if (!file_exists("T4Proyecto.pl")) die("No se puede localizar el archivo T4Proyecto.pl ");
$output = `swipl -s T4Proyecto.pl -g "categoria('drama')." -t halt.`;
$peliculas = explode("/", $output);
require_once("components/header.php");
?>
<main>
    <div class="contenedor">
        <h2>Drama</h2>
        <hr>
        <section class="contenedor__peliculas">
        <?php foreach ($peliculas as $i => $infoPelicula) {
                $pelicula = explode("+", $infoPelicula);
                if (count($pelicula) == 1) break;
                if ($i < 10) { ?>
                    <article class="pelicula">
                        <a href="clic.php?nombre=<?php echo $pelicula[0] ?>">
                            <img src="img/<?php echo $pelicula[0] ?>.jpg" alt="">
                            <h4><?php echo $pelicula[0]; ?></h4>
                            <p> Precio: <b><?php echo $pelicula[1]; ?></b></p>
                        </a>
                    </article>
                <?php } else { ?>
                    <article class="pelicula estrenos">
                        <p class="estrenos__etiqueta">Estreno</p>
                        <a href="clic.php?nombre=<?php echo $pelicula[0] ?>">
                            <img src="img/<?php echo $pelicula[0] ?>.jpg" alt="">
                            <h4><?php echo $pelicula[0]; ?></h4>
                            <p> Precio: <b><?php echo $pelicula[1]; ?></b></p>
                        </a>
                    </article>
            <?php }
            } ?>
        </section>
    </div>
</main>

<?php require_once("components/footer.php") ?>
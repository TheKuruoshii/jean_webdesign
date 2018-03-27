<?php

require_once "functions.php";
require_once "model/database.php";

$liste_photos = getAllPhotos();

getHeader("Accueil", "Jean Websign le super site");
?>

<header class="header-home">

    <div id="header_content" class="row col_center">

        <?php getMenu(); ?>

        <h2>Hello ! Je suis Jean Webdesign</h2>
        <h3>J'aime bidouiller photoshop</h3>

    </div>

</header>

<main>

    <section id="photos">

        <div id="photos_content" class="row col_center flex_wrapper">

            <h2>Dernières photos</h2>
            <?php foreach ($liste_photos as $photos) : ?>
                <?php include "include/photo.inc.php" ?>
            <?php endforeach; ?>

        </div>

    </section>


    <section id="contact" class="row col_center">

        <h2>Prenons contact</h2>

        <h3 class="col-10 col_center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa velit voluptas dolore corrupti accusamus esse sapiente harum dolorum corporis maiores, delectus aperiam totam expedita, nobis ab repudiandae. Magnam, quaerat maxime.</h3>

        <a href="contact.php" class="btn-1 col-2 col_center">Me contacter</a>

    </section>

</main>

<?php getFooter() ?>
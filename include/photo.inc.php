<article class="col-4 miniature">
    <a href="photo.php?id=<?php echo $photos["id"] ?>">
        <img src="images/<?php echo $photos["image"]; ?>" alt="mini" title="mini">
        <p class="likes"><?php echo $photos["nb_likes"]; ?> likes</p>
    </a>
    <div class="infos">
        <h3><?php echo $photos["titre"]; ?> # <?php echo $photos["categorie"]; ?></h3>
        <?php $liste_tags = getAllTagsByPhoto($photos["id"]) ?>
        <?php if (count($liste_tags) > 0) : ?>
            <p>
                <?php foreach ($liste_tags as $tag) : ?>
                    <?php echo "# " . $tag["titre"]; ?>
                <?php endforeach; ?>
            </p>
        <?php endif; ?>

        <p><?php echo $photos["date_creation_format"]; ?></p>
    </div>
</article>
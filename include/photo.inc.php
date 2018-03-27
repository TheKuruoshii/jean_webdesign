<article class="col-4 miniature">
    <a href="photo.php?id=<?php echo $photos["id"] ?>">
        <img src="images/<?php echo $photos["image"]; ?>" alt="mini" title="mini">
        <p class="likes"><?php echo $photos["nb_likes"]; ?> likes</p>
    </a>
    <div class="infos">
        <h3><?php echo $photos["titre"]; ?> # <?php echo $photos["categorie_id"]; ?></h3>

        <?php if (count($photos["tags"]) > 0) : ?>
            <p>
                <?php foreach ($photos["tags"] as $tag) : ?>
                    <?php echo "# " . $tag; ?>
                <?php endforeach; ?>
            </p>
        <?php endif; ?>

        <p><?php echo $photos["date_creation_format"]; ?></p>
    </div>
</article>
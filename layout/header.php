<!doctype html>

<html lang="fr">

    <head>

        <meta charset="utf-8">

        <title>JWD - <?php echo $title; ?></title>

        <meta name="description" content="<?php echo $description ?>">

        <!-- favicone -->
        <link rel="shortcut icon" href="#">

        <!-- FEUILLES DE STYLE -->

        <!-- normalize -->
        <link rel="stylesheet" href="css/normalize.css" type="text/css" media="all">

        <link rel="stylesheet" href="css/grid-12.css" type="text/css" media="all">

        <?php foreach ($stylesheets as $path) : ?>
            <link rel="stylecheet" href="<?php echo $path; ?>" >
        <?php endforeach; ?>

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

        <!-- styles de page -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

    </head>    

    <body>


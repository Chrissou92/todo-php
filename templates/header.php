<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?=$title?></title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <h1><?=$title?></h1>

            <nav class="filters">
                <?php foreach ($filters as $index => $label): ?>


                    <!-- classe active ou pas  -->


                    <!-- si on as cliqué sur aucun filtre -->
                    <?php if (!isset($_GET['filter']) && $index === 0 ): ?>
                        <a href="index.php?filter=<?=$label?>" class="item activ"><?=$label?></a>

                        <!-- on as cliqué sur un filtre et -->
                    <?php elseif (isset($_GET['filter']) && $_GET['filter'] === $label): ?>
                    <a href="index.php?filter=<?=$label?>" class="item activ"><?=$label?></a>

                    <!-- on as un bouton normal sans class activ-->
                <?php else: ?>
                    <a href="index.php?filter=<?=$label?>" class="item"><?=$label?></a>
                    
                <?php endif; ?>

                    <?php endforeach; ?>
            </nav>
            <nav class="filters">
                <a class="item task-work"href="">Travail</a>
                <a class="item task-perso"href="">personnel</a>
                <a class="item task-cart"href="">liste de course</a>
            </nav>
        </header>

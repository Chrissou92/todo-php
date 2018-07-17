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
                    <a href="index.php?filter=<?=$label?>" class="<?=($index === 0 ? 'item activ' : '')?>item"><?=$label?></a>
                    <?php endforeach; ?>
            </nav>
        </header>

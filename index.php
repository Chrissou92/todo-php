<?php

error_reporting(E_ALL);



var_dump($_GET['filter']);

$title = 'Todolist';
$filters = ['All', 'Completed', 'Todo'];


// Donnée en dur
require('data.php');

// Fichier Templates
require('templates/header.php');
require('templates/content.php');
require('templates/footer.php');

?>

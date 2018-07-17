<?php
/*
    ce fichier contient toutes les données par défaut
    de notre liste des tâches
 */
$tasks = [
    [
        'title' => 'Acheter du lait',
        'category' => 'cart',
        'done' => false
],
[
    'title' => 'Appeler Pierre',
    'category' => 'work',
    'done' => false
],
[
    'title' => 'Appeler Paul',
    'category' => 'work',
    'done' => true,
],
[
    'title' => 'Acheter des croquettes',
    'category' => 'cart',
    'done' => false
],
[
    'title' => 'Emmener le chat au veto',
    'category' => 'perso',
    'done' => true
],
];

// ont tri les taches pour recuperer les 'done'
function applyFilter ( $isDone ) {

    global $tasks;
    $results = [];

    foreach ($tasks as $task) {
        if ($task['done'] === $isDone) {
            //
            $results[] = $task;
        }
    }
    // on retourne le tableau de resultat
    return $results;
}
// On regarde si ont doit appliquer un filtre

if (isset($_GET['filter'])) {

    if ($_GET['filter'] === 'All') {

    }
    elseif ($_GET['filter'] === 'Completed') {

        $res = applyFilter( true );

        $tasks = $res;


    }
    else {
        $tasks = applyFilter ( false );
    }

}

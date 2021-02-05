<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>😵 Mastermind</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/master.css" rel="stylesheet">

</head>

<body>

<div class="d-flex justify-content-center mt-5 mb-4">
    <h1>😵 Mastermind</h1>
</div>

<?php
$availableColors = ['black', 'red', 'white', 'yellow', 'green', 'pink'];

$secretCombinationKeys = array_rand($availableColors, 4); // génère, de manière aléatoire, 4 clés du tableau $availableColors
shuffle($secretCombinationKeys); // mélange le tableau des clés
// $secretCombination est la variable qui contient la combinaison secrète que doit trouver le joueur
$secretCombination = array_map(function ($colorKey) use ($availableColors) { // transforme les clés en valeur
    return $availableColors[$colorKey];
}, $secretCombinationKeys);

if (false) { // si vous souhaitez voir, pour debug, ce que contient $secretCombination, remplacez false par true
    echo '<pre>';
    print_r($secretCombination);
    echo '</pre>';
}
?>

<div class="d-flex justify-content-center mb-3">
    <div class="d-flex justify-content-around col-5 col-md-3">
        <div class="try col-5">
            <i class="bi bi-hand-index"></i>
            0 <!-- nombre de tour de la partie en cours -->
        </div>
        <div class="try col-5">
            <i class="bi bi-hand-thumbs-up"></i>
            - <!-- meilleur nombre de tour (le plus bas) du joueur -->
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <a href="?color=black" class="box black"></a>
    <a href="?color=red" class="box red"></a>
    <a href="?color=white" class="box white"></a>
    <a href="?color=yellow" class="box yellow"></a>
    <a href="?color=green" class="box green"></a>
    <a href="?color=pink" class="box pink"></a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>

</body>

</html>
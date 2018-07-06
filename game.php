<?php
session_start();
require 'Joueur.php';
$j1=new Joueur("DOnovan");

$_SESSION['J1']=$j1;
?>

<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="game.js"></script>
    <link rel="stylesheet" type="text/css" href="game.css" />
    <title>game</title>
</head>
<body>
    <p><?= $j1->getNom() ?></p>

    <input type="button" value="prochain combat" onClick="combatSuivant()">

    <div id="test"></div>
</body>
</html>

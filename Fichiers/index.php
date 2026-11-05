<?php
include("includes/fonctions.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HTML - TP3</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php

$ressources=lire();

foreach($ressources AS $res){
    echo '<article>';

        echo '<h1> <img class="logo" src="img/logo-'.$res['type'].'.svg">'.$res['titre'].'</h1>';
        echo '<p>'.$res['description'].'</p>';
        echo '<p>'.$res['mots-cles'].'</p>';
        echo '<p>'.$res['date'].'</p>';
        $chemin = $res['type'] == 'document' ? 'uploads/'.$res['fichier'] : $res['url'];
        echo '<a href="'.$chemin.'" target="_blank" rel="noopener noreferrer">Voir</a>';
        echo '<a href="modifier.php?id='.$res['id'].'">Modifier</a>';
        echo '<a href="supprimer.php?id='.$res['id'].'">Supprimer</a>';

    echo '</article>';
}

?>
</body>
</html>
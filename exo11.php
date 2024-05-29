<?php
    require "elements/header.php";
    require "elements/nav.php";
?>
<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
</p>

<?php
    $tabVoiture= ["Peugeot","Renault","BMW","Mercedes"];
    echo "Il y a actuellement " . count($tabVoiture) . " marques de voitures differentes dans le tableau <br>";
    foreach ($tabVoiture as $voiture) {
        echo $voiture . "<br>";
    }
?>

<?php require "elements/footer.php";?>
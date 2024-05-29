<?php
    require "elements/header.php";
    require "elements/nav.php";
?>

<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>
<form action="" method="get">
    <label for="">Entrer la somme en Franc pour la convertir en euros:</label>
    <input type="float" name="francs" id="">
    <button type="submit">Convertir</button>
</form>
<?php
    if (isset($_GET['francs'])) {
        $francs = (float) $_GET['francs'];
        $euro=round($francs/6.55957,2);
        echo "La somme : " . htmlentities($francs) . " FF correspond a " . $euro . " €";
    }
?>
<?php require "elements/footer.php";?>
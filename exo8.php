<?php
    require "elements/header.php";
    require "elements/nav.php";
?>

<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :<br>
    Table de 8 : <br>
1 x 8 = 8<br>
2 x 8 = 16<br>
3 x 8 = 24 …<br>
</p>
<form action="" method="get">
    <label for="">Entrez un nombre pour avoir sa table de multiplication :</label>
    <input type="number" name="number" id="">
    <button type="submit">Envoyer</button>
</form>

<?php
    if (isset($_GET["number"])) {
        $number = $_GET["number"];
        echo "La table de $number : <br>";
        for ($i=1; $i < 11; $i++) { 
            echo "$i x $number =" . $number*$i . "<br>";
        }
    }
?>

<?php require "elements/footer.php";?>
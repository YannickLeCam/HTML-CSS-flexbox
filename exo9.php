<?php
    require "elements/header.php";
    require "elements/nav.php";
?>
<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>
<form action="" method="get">
    <label for="age">Entrer votre age :</label>
    <input type="number" name="age" id="" required>
    <label for="sexe"></label>
    
    <div class="sexeradio">
        <label for="">Entrer votre sexe biologique :</label>
        <span>H</span>
        <input type="radio" name="sexe" id="" value="H" checked>
        <span>F</span>
        <input type="radio" name="sexe" id="" value="F">
    </div>
    <button type="submit">Envoyer</button>
</form>
<?php
    if (isset($_GET['sexe']) & isset($_GET['age'])) {
        $sexe = $_GET['sexe'];
        $age=$_GET['age'];
        echo "Vous regarder pour le cas présent : <br>";
        if ($sexe == "F") {
            echo "Pour une femme de $age ans <br>";
        }else {
            echo "Pour un homme de $age ans <br>";
        }
        if (($sexe == 'F' & $age>18 & $age < 35) | ($sexe == 'H' & $age > 20 )) {
            echo "Cette personne est imposable.";
        }else {
            echo "Cette personne n'est pas imposable.";
        }
    }
?>

<?php require "elements/footer.php";?>
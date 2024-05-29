<?php
    require "elements/header.php";
    require "elements/nav.php";
?>
<h1>Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<?php
    $unitPrice = 9.99;
    $quant=5;
    $TVA=0.2;
    $prixHT = round($unitPrice*$quant,2);
    $total = round($prixHT + ($prixHT*$TVA),2);

    echo "Prix unitaire de l’article : $unitPrice € <br>";
    echo "Quantité : $quant <br>";
    echo "Prix de la facture HT : $prixHT € <br>";
    echo "Taux de TVA : $TVA <br>";
    echo "Le montant de la facture à régler est de : $total € <br>";



?>
<?php require "elements/footer.php";?>
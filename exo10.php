<?php
    require "elements/header.php";
    require "elements/nav.php";
?>
<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p>

<form action="" method="get">
    <label for="inc">Entrez la somme versée par le client :</label>
    <input type="text" name="inc" id="">
    <label for="facture">Entrez la somme que doit payer le client :</label>
    <input type="text" name="facture" id="">
    <button type="submit">Envoyer</button>
</form>


<?php
    $tabBillet=[
        "50"=>0,
        "20"=>0,
        "10"=>0,
        "5"=>0,
        "2"=>0,
        "1"=>0,
        "0.5"=>0,
        "0.2"=>0,
        "0.1"=>0,
        "0.05"=>0,
        "0.02"=>0,
        "0.01"=>0
    ];

    if (isset($_GET['inc']) & isset($_GET['facture'])) {
 
        $verse = (float)$_GET['inc'];
        $facture = (float)$_GET['facture'];
        echo "Le montant a payer : $facture <br>";
        echo "Montant versé : $verse <br>";

        if ($facture>$verse) {
            echo "Attention le client vous doit encore ". $facture-$verse ." € <br>"; 
        }else {
            $reste = $verse-$facture;
            echo "Reste à payer : $reste € <br>";
            echo "***********************************<br>";
            foreach ($tabBillet as $montant => $value) {
                $temp= ceil($reste / $montant)-1;
                if ($reste / $montant == 1) {
                    $temp= 1;
                }
                if ($temp >= 1) {
                    $reste = round($reste-($montant * $temp),2);
                    if ($montant > 2) {
                        $typeRendu ="Billet";
                    }else {
                        $typeRendu="Piece";
                    }
                    if ($temp >1) {
                        $typeRendu = $typeRendu."s";
                    }
                    echo "- $temp $typeRendu de $montant € <br>";
                }
            }
        }
        
        
    }
?>
<?php require "elements/footer.php";?>
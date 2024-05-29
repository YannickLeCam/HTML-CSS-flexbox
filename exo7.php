<?php
    require "elements/header.php";
    require "elements/nav.php";
?>

<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge : <br>
Poussin : entre 6 et 7 ans<br>
Pupille : entre 8 et 9 ans<br>
Minime : entre 10 et 11 ans<br>
Cadet : à partir de 12 ans<br>
Si la catégorie n’est pas gérée, merci de le préciser<br></p>

<form action="" method="get">
    <label for="age">Quel age vous voulez tester :</label>
    <input type="number" name="age" id="">
    <button type="submit">Envoyer</button>
</form>


<?php
    $tabAge=[
        "Poussin"=>[6,7],
        "Pupille"=>[8,9],
        "Minime"=>[10,11],
        "Cadet"=>[12]
    ];
    if (isset($_GET['age'])) {
        $ageteste=(int) $_GET['age']; //On retraduit en int pour plus de sécurité
        $locker =0;
        foreach ($tabAge as $catégorie => $ages) {
            foreach ($ages as $age) {
                if ($age==$ageteste) {
                    echo "La catégorie pour l'age " . htmlentities($ageteste) . " est " . $catégorie;
                    $locker=1;
                }
                if (count($ages)===1) {
                    if ($age<$ageteste) {
                        echo "La catégorie pour l'age " . htmlentities($ageteste) . " est " . $catégorie;
                        $locker=1;
                    }
                }
            }
        }
        if ($locker!=1) {
            echo "Malheureusement l'age " . $ageteste ." n'est pas pris en compte pour le moment . . .";
        }
    }




?>
<?php require "elements/footer.php";?>
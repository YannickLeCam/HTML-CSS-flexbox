<?php
    require "elements/header.php";
    require "elements/nav.php";
?>

<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>


<?php
    $str = "Notre formation DL commence aujourd'hui";
    $search = "aujourd'hui";
    $replace = "demain";

    echo "ancienne phrase : \"$str\" \n nouvelle phrase : \"".str_replace($search,$replace,$str) . "\".";
?>
<?php require "elements/footer.php";?>
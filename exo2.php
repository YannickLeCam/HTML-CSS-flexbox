<?php
    require "elements/header.php";
    require "elements/nav.php";
?>
<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci.</p>

<?php
$str = "Notre formation DL commence aujourd'hui";

$wordCount = str_word_count($str,0);
echo "La phrase \"$str\" a $wordCount mots !"


?>

<?php require "elements/footer.php";?>
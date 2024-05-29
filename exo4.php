<?php
    require "elements/header.php";
    require "elements/nav.php";
?>

<h1>Exercie 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>


<?php

    $str = "Engage le jeu que je le gagne";//Vrai
    $test2 = "Coucou tout le monde";//Faux
    $test3 = "Kayak";//Vrai
    function palindrome(string $str):void{
        $search=" ";
        $replace="";
        $strmod=strtolower(str_replace($search,$replace,$str));
    
        if (strrev($strmod)===$strmod) {
            echo "La phrase \"$str\" est bien un palindrome";
        }else {
            echo "La phrase \"$str\" n'est pas un palindrome";
        }
        return;
    }

    echo palindrome($str)."<br>";
    echo palindrome($test2)."<br>";
    echo palindrome($test3)."<br>";

?>
<?php require "elements/footer.php";?>
<?php
    require "elements/header.php";
    require "elements/nav.php";
?>
 <h1>Exercice 12</h1>
 <p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch</p>

<?php
    $data = [
        "Mickaël"=>"FRA",
        "Virgile"=>"ESP",
        "Marie-Claire"=>"ENG"
    ];

    foreach ($data as $prenom => $langue) {
        switch ($langue) {
            case 'FRA':
                echo "Salut $prenom ! <br>";
                break;
            case 'ESP':
                echo "Hola $prenom ! <br>";
                break;
            default:
                echo "Hello $prenom ! <br>";
                break;
        }
    }

?>

<p>Variante : trier d’abord le tableau par ordre alphabétique du prénom</p>

<?php
    ksort($data);

    foreach ($data as $prenom => $langue) {
        switch ($langue) {
            case 'FRA':
                echo "Salut $prenom ! <br>";
                break;
            case 'ESP':
                echo "Hola $prenom ! <br>";
                break;
            default:
                echo "Hello $prenom ! <br>";
                break;
        }
    }

?>
<?php require "elements/footer.php";?>
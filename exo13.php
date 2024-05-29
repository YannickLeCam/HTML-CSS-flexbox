<?php
    require "elements/header.php";
    require "elements/nav.php";
?>
<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<?php
    $tabEleve = [
        "Mickeal" => [15, 11, 12, 13, 16, 2, 14, 18, 15],
        "John" => [10, 18, 9, 14, 17, 12, 16, 13, 19],
        "Alice" => [20, 18, 16, 19, 17, 18, 15, 14, 18],
        "Emma" => [13, 15, 14, 12, 16, 17, 11, 10, 18],
        "Sophie" => [16, 17, 18, 14, 13, 12, 19, 20, 15]
    ];
?>
<table class="table table-dark table-hover">

    <tr>
        <th scope="col">Elève\Note</th>
        <th scope="col">Note 1</th>
        <th scope="col">Note 2</th>
        <th scope="col">Note 3</th>
        <th scope="col">Note 4</th>
        <th scope="col">Note 5</th>
        <th scope="col">Note 6</th>    
        <th scope="col">Note 7</th>
        <th scope="col">Note 8</th>
        <th scope="col">Note 9</th>
        <th scope="col">Moyenne générale</td>
    </tr>
    <?php
        foreach ($tabEleve as $eleve => $tabNotes) {
            echo "<tr>";
            echo "<th scope=\"row\">$eleve</th>";
            $somme =0;
            foreach ($tabNotes as $note) {
                $somme = $somme +$note;
                echo "<td>$note</td>";
            }
            $moyenne = round($somme / count($tabNotes),2);
            echo "<td>$moyenne</td>";


            echo "</tr>";
        }
    ?>
</table>


<?php require "elements/footer.php";?>
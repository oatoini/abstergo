<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). 
    Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php

$notes=[10, 12, 8, 19, 3, 16, 11, 13, 9];

echo "Les notes obtenues par l'élève sont : ";

for ($i=0; $i<count ($notes); $i++) {
    echo $notes[$i].". ";
}

$somme = array_sum ($notes);
$nb = count ($notes);
$moy = round ($somme/$nb,2);

echo "Sa moyenne générale est donc de : ".$moy."<br>";

?>
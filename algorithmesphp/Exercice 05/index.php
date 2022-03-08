<h1>Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

    $montantfranc = 100;
    echo "Montant en francs : ".$montantfranc."<br>";
    $montanteuro = ($montantfranc / 6.55957);
    echo "Montant en Euros : ".round ($montanteuro,2);
?>
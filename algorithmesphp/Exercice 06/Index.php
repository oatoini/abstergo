<h1>Exercice 6</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, 
son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Résultat</h2>

<?php

    $nbArticle = 5;
    $prixHt = 9.99;
    $tauxTva = 0.2;
    $prixTTC = $nbArticle * $prixHt * (1 + $tauxTva);
    echo "Le montant de la facture à régler est de $prixTTC €<br>";
?>
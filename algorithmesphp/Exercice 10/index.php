<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, 
    de pièces de 2 € et 1 €.</p>

<h2>Résultat</h2>

<?php
    $montantaPayer = 152;
    $montantVerse = 200;

    $reste = $montantVerse - $montantaPayer ;
    echo "Reste à payer :".$reste." €. <br>";
    
    $billetDix = intdiv($reste, 10);
    $reste = $reste - $billetDix * 10;
    
    $billetCinq = intdiv ($reste, 5);
    $reste = $reste - $billetCinq * 5;
    
    $pieceDeux = intdiv ($reste, 2);
    $reste = $reste - $pieceDeux * 2;

    $pieceUne = intdiv ($reste, 1);
    $reste = $reste - $pieceUne * 1;
    
    echo " Rendue de monnaie : ".$billetDix." billets de dix, "
    .$billetCinq." billet de cinq, ".$pieceDeux." pièce de deux, " 
    .$pieceUne." pièces de un Euro. " ;

?>
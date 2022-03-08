<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

function calculage ($date)

{
    //On déclare les dates à comparer
    $dateNais = new DateTime($date);
    $dateJour = new DateTime();

    //On calcule la différence
    $difference = $dateNais->diff($dateJour);

    //On retourne la différence en années en mois et en jour
    return $difference->format('%Y années %m mois %d jours');
}

echo "Age de la personne : ". calculage("1985-01-17"). " ";
?>
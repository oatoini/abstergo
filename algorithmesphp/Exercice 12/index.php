<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms
     et de langue associée (tableau contenant clé et valeur), dire bonjour aux 
     différentes personnes dans leur langue respective (français ➔ « Salut », 
     anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<h2>Résultat</h2>

<?php

/* Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG */

$personnes = [
    "mickael" => "fr" ,
    "virgile" => "spa" ,
    "marie-claire" => "eng"
] ;

foreach ($personnes as $personne => $langue) {
    if ($langue == "fr") {
        echo "Salut $personne !"; 
    }
    else if ($langue == "spa") {
            echo "Hola $personne !";
        }
        else if ($langue == "eng") {
            echo "Hello $personne !";
        }
    else echo " Langue non gérée !";
    
}
?>
<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :</p>

<h2>Solution 1</h2>

<?php

    $nb = 8;
    $prod = 1;
    $i = 0;
    while ($i <= 10) {
        $prod = $nb*$i;
        echo $nb."*".$i." = ".$prod."<br>";
        $i++;
    }
    
?>

<h2>Solution 2</h2>


<?php
   $nb = 8;
   $prod = 1;
   $i = 0;

   for ($i=0 ; $i <= 10 ; $i++) {
       $prod = $nb * $i ;
       echo $nb." * ".$i." = ".$prod." <br>";
   }

?>


<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

  $chainesDeCaracteres = "Engagelejeuquejelegagne";
  $result = strtolower (strrev($chainesDeCaracteres));
  if (strtolower($chainesDeCaracteres) == $result) {
        echo $chainesDeCaracteres." est palindrome.";
  } else {
      echo $chainesDeCaracteres." n'est pas palindrome.";
  }

?>

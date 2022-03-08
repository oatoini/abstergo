<h1>Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<h2>Résultat</h2>

<?php

    $age = 10;
    if ($age > 12 && $age < 18) {
        $result = "Cader";
    }   elseif ($age >=10) {
            $result = "Minime";
        }
            elseif ($age >= 8) {
                $result = "Pupille";
            }
                elseif ($age >= 6) {
                    $result = "Poussin";
                }
    else {$result = "Catégorie non gérée."; }
    echo "L'enfant qui a $age ans est $result .<br>";
?>
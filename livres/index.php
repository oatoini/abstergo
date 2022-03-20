<h1>POO Livre</h1>
<?php
    
    require "Livres.php";
    require "Auteur.php";

    $A1 = new Auteur ("Stephen","King");

    $a1 = new Livres ("CA",1138,"1986-01-01",20,$A1);
    echo "<h2> Livres de ".$A1."</h2>";

    $a2 = new Livres ("Simetierre",374,"1983-01-01",15,$A1);

    echo $A1 -> afficherBibliographie ();



    $A2 = new Auteur ("Agatha","Christie");

    $a1 = new Livres ("Les Enquêtes d'Hercule Poirot",191,"1924-01-01",18,$A2);
    echo "<h2> Livres d'".$A2."</h2>";

    $a2 = new Livres ("Mort sur le Nil",288,"1937-01-01",25,$A2);

    echo $A2 -> afficherBibliographie ();

    ?>
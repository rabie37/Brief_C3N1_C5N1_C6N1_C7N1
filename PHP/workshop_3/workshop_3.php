<?php
echo "<table>";

$month = array("1" => "janvier", "2" => "Février", "3" => "Mars", "4" => "Avril", "5" => "Mai", "6" => "Juin", "7" => "Juillet", "8" => "Aout", "9" => "Septembre", "10" => "octobre", "11" => "Novembre", "12" => "Décembre");
echo "<table border=1>";
foreach ($month as $x => $x_value){
    echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";

}
echo "</table>";



//Fonction 
function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

//** */
//Déclaration tableau
$month = array("key" => "value", "leo" => "13", "harry" => "16", "rick" => "15",);
//Afficher Tableau 
affichtable($month);

//Insertion
$month["karim"] ="10";
$month=array_merge($month, ["zrze" => "sdf"]);

affichtable($month);
// sutionppre
unset($month[ "leo"]);
// array_shift($month);
affichtable($month);

// array_shift

//var_dump($month);
//Calcul note maximal t la note minimale
echo "la note maximale est: ".max($month)."la note minimale est:".min($month);
asort($month);
affichtable($month);
echo"la moyenne de la classe:".round(array_sum($month)/count($month),3);
echo array_sum($month);


?>
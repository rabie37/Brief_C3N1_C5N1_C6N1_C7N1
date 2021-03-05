
      <!-- Créer une Fonction qui permet de :
    –  Vérifier la validité de la date et l’heur entré par l’Utilisateur.
    –  Puis Transformer le Format  de la date entré en Year-Month-Day et le Format de l’heur en Heures : Minute -->
 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <form action="index.php" method="POST">
    <input type="datetime-local" id="meeting-time"
           name="date">
    <button type="submit">submit</button>
    </form>
    
    </body>
    </html>
    <?php
    //  Créez une fonction PHP qui affiche une boîte d'alerte à partir de la fonction JavaScript dont la syntaxe est alert("chaine_de caractères")
    //  Cette fonction peut être appelée avec comme paramètre le texte du message à afficher. Elle est particulièrement utile pour afficher des messages d’erreur de manière élégante, sans que ces derniers restent écrits dans la page.
    //  La fonction retourne la valeur TRUE. Ceci n’est pas obligatoire mais peut permettre un contrôle d’exécution.
    function boîtedalerte ($a){
        echo "<script>alert('hello $a')</script>";
       }
       boîtedalerte("there");

      echo "<br>"; 
    function verification_date($date) {
        echo substr($date, 0,10) ;
        echo "<br>";
        echo substr($date, 11) ;
    }
    if(!empty($_POST)) {
    $date=$_POST["date"];
    verification_date($date);
    }
    echo "</br>";
    // $date = strtotime($_POST["date"]); 
    // echo date('Y/m/d h:i', $date);
   
    ?>

    







 <?php
                 //  les nombres premiers
function nombrepremier( $nombre ){


    for ($i = 2; $i < $nombre; $i++){
        if ($nombre % $i == 0){
            $fois = 1;
        }
    }

    if (isset($fois)) {
        echo "$nombre n'est pas un nombre premier";
    }
    else{
        echo "$nombre est un nombre premier";
    }

}

nombrepremier(7901);
echo "<br/>";
nombrepremier(10);
echo "<br/>";
nombrepremier(3);
echo "<br/>";
echo "<br/>";
                // La carre d’un nombre
          function carre($n){
    return $n*$n;
}
     echo carre(20);
     echo "<br>";
           //  Le logarithme népérien
    function logarithme($a){
     return log($a);
}
    echo logarithme(10);
    echo "<br>";
           //   La racine Carrée
  function racin_carre($r){
    return sqrt($r);

}
    echo racin_carre(36); 

 echo "<br>";
$name = array("hamZA", "yaSSiNE", "moHaMmed", "jAlilA", "hOUdA");
foreach ($name as $value) {
    // echo $value . "<br>";
    echo $name = ucfirst(strtolower($value)) . "<br>";
  }
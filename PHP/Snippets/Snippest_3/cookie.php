<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
<?php
if(isset($_COOKIE["med"])){
        $dates=unserialize($_COOKIE["med"]);
        $name = "med";
        $dates[]=time();
        setcookie($name ,serialize($dates));
      // print_r($dates);
        //afficher le message 
        echo "bonjour $name Vous avez consulté cette page ".count($dates)." fois , voici les détails:";
        echo "<ul>";
        foreach ($dates as $key => $value) {
          echo "<li>".date("d-m-Y H:i:s",$value)."</li>";
        }
        echo "</ul>";
      }
      else{
        $dates[]=time();
        $name = "med";
        setcookie($name ,serialize($dates));
        echo "C'est votre première visite : ".date("d-m-Y H:i:s",time());
      }
  ?>  
</body>
</html>
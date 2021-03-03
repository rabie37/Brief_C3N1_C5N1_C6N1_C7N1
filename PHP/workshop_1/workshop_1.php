<!-- Affichage Simple en PHP et HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop_1</title>
</head>
<body>
    <?php
        echo "Hello World \n";
    ?>
</body>
</html>

<!-- Affichage de code HTML -->
<?php
    echo "<h1> Bonjour Youcode </h1>";
?>

<!-- Affichage de la date -->
<?php
    echo date('Y-m-d H:i:s');
    echo date('l j F Y, H:i'); 
    echo date('d F Y');
    echo date('d/m/Y');
?>

<!-- Variable stextes et numériques -->
<?php
    // Declaration des variables
    $title = "PHP";
    $phrase = "Hello World";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title" ?></title>
</head>
<body>
    <h1> Testing </h1>
    <p>
    <?php
        echo "$phrase";
    ?>
    <?php
   echo    "<h3>Re-bonjour le monde !<br> Cet affichage est <u>toujours</u> produit par PHP,<br>il contient cette fois des <mark>balises HTML.</h3>" ;

   ?>
    </p>
</body>
</html>

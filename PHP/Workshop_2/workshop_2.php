<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// $x = 1; - Initialize the loop counter ($x), and set the start value to 1
// $x <= 10 - Continue the loop as long as $x is less than or equal to 10
// $x++; - Increase the loop counter value by 1 for each iteration
// $x = 1;

// while($x <= 10) {
//   echo "The number is: $x <br>";
//   $x++;
 
//  }
// 
// <!-- $x = 0; - Initialize 
// $x <= 10; - Condition
// $x++ - incrementation -->


function boucle ($var){
  for ($x = 1; $x <= $var; $x++) {

    echo "the number is: $x <br>";
  }
}
//Appel
boucle(10);
?> 
    
</body>
</html>
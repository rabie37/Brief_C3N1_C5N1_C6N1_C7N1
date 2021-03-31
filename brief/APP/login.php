
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body >

<h1>LOGIN</h1>
    <form class="form" action="login.php" method="POST">
    <input class="ts" type="text" placeholder="email" name="email"required>
   
    <input type="password" name="password" placeholder="********" required>
    <input class="bouton" id="sub" type="submit" name="submit" value="submit">
    </form>
    </div>
 <?php session_start() ?>
    <?php
    if (isset($_POST["submit"])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
   //  $hashePass =  password_hash($password ,PASSWORD_BCRYPT);
  
    $con = mysqli_connect('localhost','root','','wedev');
     if (!$con) {
    die("erreur") .mysqli_error($con);
    }
    $query = "SELECT * FROM users ";
   $re= mysqli_query($con , $query);
    if (!$re) {
       die('erreur'. mysqli_error($con));
    }
    if ($re) {   
       while($row= mysqli_fetch_array($re))
       {
       
       $db_email=$row['email'];
       $db_pass = $row['password'];
       $db_id = $row['id'];
      //  $db_pass  =  password_verify( $db_pass ,PASSWORD_BCRYPT);
    if( $email ==  $db_email &&  $password == $db_pass) { 
        header("Location: index2.php") ;
        
        $_SESSION['db_email']=$email;
        $_SESSION['db_id']=$db_id;
       
        
    }
    
    
}}   }
   ?> 
</body>
</html>
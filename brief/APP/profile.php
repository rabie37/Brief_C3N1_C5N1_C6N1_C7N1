<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body >
<?php  session_start() ; ?>

<?php 
if (isset($_SESSION['db_nom'])) {
  

  $nom= $_SESSION['db_nom'] ;
  $prenom= $_SESSION['db_prenom'];
  $db_id=$_SESSION['db_id'];
  ?>
<a href="profile.php?hello=true"  name="Logout">LOGOUT</a> -->
<?php
//   function logout() {
//     session_unset();
//     header("location:login.php");
//   }
  if (isset($_GET['hello'])) {
    session_unset();
    header("location:login.php");
    // logout();
  }
  if( $db_id =='1') { 
    header("location:list.php");
    echo "<h2>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h2>";
  }
  else {
      
  
?>

</nav>

<?php  
  
  
     $con = mysqli_connect('localhost','root','','wedev');
if (!$con) {
    die("erreur") .mysqli_error($con);
}
   $qry="SELECT * FROM technos INNER JOIN users ON  technos.id = users.id ";
   $qry.="where nom = '$nom' and prenom = '$prenom' ";
if(!$qry)
{
die("Query Failed: ");
}
$re= mysqli_query($con , $qry);
    if (!$re) {
       die('erreur'. mysqli_error($con));
    }

    if ($re) {
     
while($row= mysqli_fetch_array($re))
{

    echo "<h2>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h2>";


    echo "
    <article class='art'>
    <div> 
    <label >HTML</label>
    <label >NIVEAU : <strong> ".$row['html']."</strong>  </label>
    </div>
    <div> 
    <label>CGI</label>
    <label >NIVEAU :<strong> ".$row['cgi']."</strong></label>
    </div>
    <div> 
    <label >JavaScript</label>
    <label >NIVEAU :<strong> ".$row['js']."</strong></label>
    </div>
    <div> 
    <label >AJAX</label>
    <label >NIVEAU :<strong>".$row['ajax']."</strong></label>
    </div>
    <div> 
    <label >PHP</label>
    <label >NIVEAU :<strong>".$row['php']."</strong></label>
    </div>
    </article>";
}}}}
    
    else {
      echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
    }

    
    ?>

</body>
</html>
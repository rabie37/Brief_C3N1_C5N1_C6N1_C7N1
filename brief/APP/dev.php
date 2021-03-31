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
include "header.php" ?>
<?php echo " <a href='formation.php'>FORMATION </a>  <a href='dev.php'>DEVELOPPEURS </a>
    <a href='list.php'>LISTS </a>" ?>
<a href="dev.php?hello=true"  name="Logout">LOGOUT</a>
<?php
  if (isset($_GET['hello'])) {
    session_unset();
    header("location:login.php");
};
echo  "</nav>";
?>

<?php
 echo "<h1>".$_SESSION['db_nom']." ".$_SESSION['db_prenom']."</h1>";
$con = mysqli_connect('localhost','root','','wedev');
if (!$con) {
    die("erreur") .mysqli_error($con);
}
$qry="SELECT * FROM users where id > 1 ORDER BY nom ASC  ";
if(!$qry)
{
die("Query Failed: ");
}
$re= mysqli_query($con , $qry);
if ($re) {
    echo "<h2>la liste de des développeurs</h2>";
    
   while($row= mysqli_fetch_array($re))
   {
    $dev_id = $row['id'];
        echo "<ul>";
        echo "<li> - ".$row['nom']." ". $row['prenom']."
    <form action='dev.php' method='post' >
<input class='delete' type='submit' name='del' value='$dev_id  '>
 </form>";
    echo "</li>";
       echo "</ul>";  
  
   ///DELETE A DEVELOPPEUR
      if (isset($_REQUEST["del"])) {
        $que="DELETE FROM technos WHERE id = ".$_POST['del']."";
         mysqli_query($con , $que);
        $qu="DELETE FROM formations WHERE id = ".$_POST['del']."";
        mysqli_query($con , $qu);
         $q="DELETE FROM users WHERE id = ".$_POST['del']."";
         $del= mysqli_query($con , $q);
        if (!$del) {
            die('erreur').mysqli_error($del);
        
          }      
          
}}
}}
    
else {
  echo "<h1>CONNECTION FAILED PLEASE <a href='login.php' >LOGIN</a> </h1>";
}
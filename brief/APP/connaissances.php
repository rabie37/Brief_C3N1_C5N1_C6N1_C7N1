<?php  session_start() ; ?>
<?php
 $email = $_SESSION['db_email'] ;
 $password =$_SESSION['db_password'];
 if(isset($_POST['submit'])) {
 $html = $_POST['HTML'];
 $cgi = $_POST['CGI'];
 $js = $_POST['JS'];
 $ajax = $_POST['AJAX'];
 $php = $_POST['PHP'];

 $con = mysqli_connect('localhost','root','','wedev');
 if (!$con) {
     die("erreur") .mysqli_error($con);
 }
 $qry="SELECT * FROM users where email = '$email' and password = '$password' ";
 if(!$qry)
 {
 die("Query Failed: ");
 }
 $re= mysqli_query($con , $qry);
 if ($re) {
    while($row= mysqli_fetch_array($re))
    {
       $db_id = $row['id'];
       $db_email = $row['email'];
       $db_password = $row['password'];
    }
   
    $query = "INSERT INTO technos (id ,html ,cgi ,js ,ajax ,php) VALUES('$db_id','$html', ' $cgi','$js','$ajax','$php')";
    $r= mysqli_query($con , $query);
     if (!$r) {
        die('erreur').mysqli_error($con);
     }
     if ($r) {
     header("location: list.php");
   }   }}

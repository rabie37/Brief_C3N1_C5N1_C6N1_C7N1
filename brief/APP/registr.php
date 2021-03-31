<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <form class="form" action="enregistrer.php" method="POST">
                 
                  <input type="text" placeholder="nom"  name="nom" required />
                  
                  <input  type="text" placeholder="prenom" name="prenom"required/>
                 
                  <input type="email" placeholder="exemple@gmail.com" name="Email" required/>
                  
                  <input type="password" name="password" placeholder="********" required />
                  <input class="bouton" type="submit" name="submit" value="submit">
      </form>
        
    
  
</body> 
</html>
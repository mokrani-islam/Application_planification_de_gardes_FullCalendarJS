<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css "href="Styles/style.css">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <title>Connexion</title>
</head>
<body>




<div class="container">
<div class="img">

<img  class="med" src="images/med.svg" alt="page connexion">
</div>

<div class="login-container">
<form action="Chef.php" method="Post">
  <img class="profil" src="images/profil2.svg" alt="profil">
  <h2> Se connecter</h2>
  
  <div class="input-div one ">
   <div class="i">
    <i class="fas fa-user"></i>
  </div>
   <div>
    <h5>Email</h5>
    <input type="text" class="inpuut" name="email">
   </div>

  </div>

  <div class="input-div two">
    <div class="i">
      <i class="fas fa-lock"></i>
   </div>
    <div>
     <h5>mot de passe </h5>
     <input type="password" class="inpuut" name="mdp">
    
    </div>

   </div>  


<input type="submit" class="btn" value="Se connecter">
<?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 ){
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }else{

                  echo "<p style='color:red'> un champ de saisie vide</p>";
                }
              
              
              
              
              
              
              
              
              
              }
                ?>
</form>

</div>


</div>





  
</body>
</html>
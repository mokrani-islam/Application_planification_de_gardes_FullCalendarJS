<?php
               session_start();
               
                
             
             
                if($_SESSION['username']!== ""){
                    $user = $_SESSION['username'];
                    $SerMed= $_SESSION['service'];
                    $prenom= $_SESSION['prenom11'];
                    $nom= $_SESSION['nom11'];
                    
                    // afficher un message
                    //echo "Bonjour $user, vous êtes connecté au $SerMed ";
                }
          ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link rel="stylesheet" type="text/css" href="Styles/styleAcceuil.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <title>Acceuil</title>

  
  
  <link rel="stylesheet" type="text/css" href="Styles/style.css">
  <link rel="stylesheet" type="text/css" href="Styles/Liste.css">
  <link rel="stylesheet" type="text/css" href="Styles/Ajout.css">
  
 

</head>
<body>

<div class="header">
<a href="AcceuilInfirmier.php"><i class="fas fa-heartbeat"></i>Me<span class="spa">d</span >gard<span class="spa1">e</span></a>
<div class="menuP">
<ul>
  <li><a href="AcceuilInfirmier.php">Acceuil</a></li>
  <li><a href="planning.php">Planning</a></li>
  <li><a href="ListeMedecins.php">Médecins</a></li>
  <li class="inf"><a href="ListesInfirmier.php">Infirmiers</a></li>
  
</ul>
</div>

<div class="cote">

<a href="Deconnexion.php?deconnexion=true" class="menur"><i class="fas fa-hospital-user"></i></a>

   <div class="menu-deroulant">
   <ul class="menu2">
    <li class="link2"><a href="Deconnexion.php?deconnexion=true">Se déconnecter</a></li>
    <li class="link1"><a href="">Profil</a></li>
   </ul>
    
   </div>
</div>

</div>
</div>

<div class="home-section">
  <div class="image">
    <img src="images/Medecins.svg" alt="">
    
    </div>
    
    <div class="content">
      <h1>Bienvenue, Dans l'espace Infirmier</h1>
      <p> Mr <span class="no"> <?=$nom ?> </span> <span class="pre"> <?=$prenom ?> </span>vous  êtes acctuellment connecté ent tant que qu'infirmier au sein du service <span class="ser"> <?=$SerMed; ?></span> vous disposez de tout les droits d'accés sur cette platforme de gardes qu'ainsi à bien d'autres services.</p>
    </div>
    
</div>

</body>
</html>
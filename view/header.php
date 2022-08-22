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
  <?php session_start();
  $type=$_SESSION['type'];
   if ($type=='chef') {
    echo "<a href='AcceuilChefDeService.php'><i class='fas fa-heartbeat'></i>Me<span class='spa'>d</span >gard<span class='spa1'>e</span></a>
    <div class='menuP'>
    <ul>
      <li><a href='AcceuilChefDeService.php'>Acceuil</a></li> ";
    # code...
   }elseif($type=='medecin') {
    echo "<a href='AcceuilMedecin.php'><i class='fas fa-heartbeat'></i>Me<span class='spa'>d</span >gard<span class='spa1'>e</span></a>
    <div class='menuP'>
    <ul>
      <li><a href='AcceuilMedecin.php'>Acceuil</a></li> ";
   
   }elseif($type=='infirmier'){
    echo "<a href='AcceuilInfirmier.php'><i class='fas fa-heartbeat'></i>Me<span class='spa'>d</span >gard<span class='spa1'>e</span></a>
    <div class='menuP'>
    <ul>
      <li><a href='AcceuilInfirmier.php'>Acceuil</a></li> ";
    
   }
  
  
  ?>

  <li><a href="planning.php">Planning</a></li>
  <li><a href="ListeMedecins.php">Médecins</a></li>
  <li class="inf"><a href="ListesInfirmier.php">Infirmiers</a></li>
  <?php 
  
  if ($type=='chef') {
    
    echo " <li class='gar'><a href='AddGarde.php'>Gardes</a></li> ";

  }
  
  
  ?>
  
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
  







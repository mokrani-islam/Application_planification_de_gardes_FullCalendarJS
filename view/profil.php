<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <link rel="stylesheet" type="text/css" href="Styles/styleAcceuil.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Styles/profil.css">
    <title>Document</title>
</head>
<body>

<div class="header">
  <?php 
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


    </div>
    <div class="container">
        <div class="leftSection">
            <div class="roundedImage">
                <img src="images/image.png" alt="" srcset="">


            </div>
            <div class="profilName">
                <h3 class="profilName">Dr <?= $ligne[1].' '.$ligne[2] ;?></h3>

            </div>
            <div class="profilSpeci">
                <h5 class="profilSpeci"><?= $ligne[13] ;?></h5>

            </div>
            <div class="profilInformation">
            <h3 class="profilInformation"><?= $ligne[7];?></h3>

            </div>



        </div>
        <div class="rightSection">
            <div class="aboutBtn">

                <input type="submit" name="" value="A propos">




            </div>
            <div class="profilDesc">
                DR <?= $ligne[1].' '.$ligne[2]?> est un medecin au sein du service <?= $ligne[13]?> exercant ses fonctionalités autant que <?= $ligne[7] ?> à l'hopital de bejaia
            </div>
            <div class="separationRight">
                <hr>

            </div>

            <div class="informationsPersonnel">
                <div class="titelInfo">
                    <h2>Informations Personnelles</h2>

                </div>
                <div class="blocInfo">
                    <div class="dateNaissanceInfo">
                        <h3>Email: </h3>
                        <p><?= $ligne[10] ;?></p>
                    </div>
                    <div class="nomInfo">
                        <h3>Numéro de tel: </h3>
                        <p><?= $ligne[6] ;?></p>

                    </div>
                    <div class="prenomInfo">
                        <h3>Nationalité:</h3>
                        <p><?= $ligne[8] ;?></p>

                    </div>
                    <div class="adresseInfo">
                        <h3>Status:</h3>
                        <?= $ligne[9] ;?>

                    </div>

                    <div class="adresseInfo">
                        <h3>Lieu de naissance :</h3>
                        <p><?= $ligne[3] ;?></p>

                    </div>
                </div>

            </div>

        </div>

    </div>



</body>

</html>
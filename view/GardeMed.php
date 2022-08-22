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

  
  <link rel="stylesheet" type="text/css" href="Styles/Ajout.css">
 

</head>
<body>
<div class="header">
<a href="AcceuilChefDeService.php"><i class="fas fa-heartbeat"></i>Me<span class="spa">d</span >gard<span class="spa1">e</span></a>
<div class="menuP">
<ul>
  <li><a href="AcceuilChefDeService.php">Acceuil</a></li>
  <li><a href="">Planning</a></li>
  <li><a href="ListeMedecins.php">Médecins</a></li>
  <li class="inf"><a href="ListesInfirmier.php">Infirmiers</a></li>
  <li class="gar"><a href="AddGarde.php">Gardes</a></li>
</ul>
</div>

<div class="cote">

<a href="#" class="menur"><i class="fas fa-hospital-user"></i></a>

   <div class="menu-deroulant">
   <ul class="menu2">
    <li class="link1"><a href="">Profil</a></li>
    <li class="link2"><a href="Deconnexion.php?deconnexion=true">Déconnexion</a></li>
   </ul>
    
   </div>
</div>

</div>
  


<div class="imag">
      <img src="images/Medecins.svg" alt="">
      
      </div> 


</div>
<div class="container">
<div class="titre">
 Ajouter une garde Médecin 
</div>
<form action="Ajout.php" method="Post">

<div class="detail">

<div class="input-box">
        <span class="details">
        Identifiant Médecin
        </span>
        <!--<input type="text" placeholder="entrez votre service" required>-->
        <select id="pet-select" name="id">
          <option value="">Sélectionner un identifiant</option>
          <?php 
          session_start();
          $host='localhost';
          $user='root';
          $pdw='';
          $dbname='projet';
          $con= mysqli_connect($host,$user,$pdw,$dbname);
          $SerMed= $_SESSION['service'];
          $sql22 = "SELECT * FROM medec";
          $Id=mysqli_query($con,$sql22);
          while ($ss = mysqli_fetch_row($Id)) {
            if ($ss[13]==$SerMed) {
            echo" <option value='$ss[0]'> $ss[0]</option>";  
            }
           
          }
          ?>
          
          
      </select>
             

</div>


    <div class="input-box">
      <span class="details">
      Début de garde 
      </span>
      <input type="date" required name="date_d">
      
      </div>


      <div class="input-box">
      <span class="details">
      Fin de garde 
      </span>
      <input type="date" required name="date_f">
      
      </div>

     
</div>

<div class="button">

<input type="submit" name="Garde" value="Ajouter">  

</div>
</form>




</div>




</body>
</html>

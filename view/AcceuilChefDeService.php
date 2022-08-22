
<?php 
require_once 'header.php';

if($_SESSION['username']!== ""){
  $user = $_SESSION['username'];
  $SerMed= $_SESSION['service'];
  $prenom= $_SESSION['prenom11'];
  $nom= $_SESSION['nom11'];
  
  // afficher un message
  //echo "Bonjour $user, vous êtes connecté au $SerMed ";
}
?>




<div class="home-section">
  <div class="image">
    <img src="images/Medecins.svg" alt="">
    
    </div>
    
    <div class="content">
      <h1>Bienvenue, Dans l'espace chef de service</h1>
      <p> Dr <span class="no"> <?=$nom ?> </span> <span class="pre"> <?=$prenom ?> </span>vous  êtes acctuellment connecté ent tant que chef de service <span class="ser"> <?php
      if($SerMed[0]=="A" || $SerMed[0]=="E" ||  $SerMed[0]=="U" ||  $SerMed[0]=="I" ||  $SerMed[0]=="O" ) 
      { echo "d"."'".$SerMed; }else {
        echo "de ".$SerMed;
      }
      
      ?></span> vous disposez de tout les droits d'accés sur cette platforme de gardes qu'ainsi à bien d'autres services.</p>
    </div>
    
</div>

</body>
</html>
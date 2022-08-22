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
  <li class="gar"><a href="">Gardes</a></li>
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
 Ajouter un Médecin 
</div>
<form action="Ajout.php" method="Post">
<div class="detail">

<div class="input-box">
<span class="details">
  Nom
</span>
<input type="text" placeholder="Entrez le Nom" required name="nom">

</div>

<div class="input-box">
  <span class="details">
    Prénom
  </span>
  <input type="text" placeholder="Entrez le Prénom " required name="prenom">
  
  </div>

  <div class="input-box">
    <span class="details">
      lieu de naissance
    </span>
    <input type="text" placeholder="lieu de naissance
    " required name="lieu_naissance">
    
    </div>  
    <div class="input-box">
      <span class="details">
      Date naissance
      </span>
      <input type="date" required name="date_naissance">
      
      </div>
      <div class="input-box">
        <span class="details">
        Adresse
        </span>
        <input type="text" placeholder="entrez votre adresse" required name="adresse"> 
        
        </div>

        <div class="input-box">
          <span class="details">
          Numéro de telephone
          </span>
          <input type="text" placeholder="entrez votre numéro de telephone" required name="numtel">
          
          </div>  


      <div class="input-box">
        <span class="details">
        Service Médical
        </span>
        <!--<input type="text" placeholder="entrez votre service" required>-->
        <select id="pet-select" name="service">
          <option value="">--Choisir un Service--</option>
          <?php 
          session_start();
          $SerMed= $_SESSION['service'];
          ?>
          <option value="<?=$SerMed ?>"><?php 
          echo ''.$SerMed ;
          ?></option>
          
      </select>
        </div>

        <div class="input-box">
        <span class="details">
        Grade
        </span>
        <!--<input type="text" placeholder="entrez votre service" required>-->
        <select id="pet-select" name="grade">
          <option value="">--Choisir un Grade--</option>
          <option value="Interne">Interne</option>
          <option value="Externe">Externe</option>
          <option value="Résidant">Résidant</option>
          <option value="Généraaliste">Généraliste</option>
          <option value="Spécialiste">Spécialiste</option>
          <option value="Maitre-A-A">Maitre-A-A</option>
          <option value="Maitre-A-B">Maitre-A-B</option>
          <option value="Maitre-C-A">Maitre-C-A</option>
          <option value="Maitre-C-B">Maitre-C-B</option>
          <option value="Professeur">Professeur</option>
      </select>
        </div>


        <div class="input-box">
        <span class="details">
        Nationalité
        </span>
        <!--<input type="text" placeholder="entrez votre service" required>-->
        <select id="pet-select" name="nationalite">
          <option value="">--Choisir une Nationalité--</option>
          <option value="Algerienne">Algerienne</option>
          <option value="Autre">Autre</option>
        </select>
        </div>
        
        <div class="input-box">
        <span class="details" >
        Statut
        </span>
        <!--<input type="text" placeholder="entrez votre service" required>-->
        <select id="pet-select" name="status">
          <option value="">--Choisir un statut--</option>
          <option value="Celibataire">Célibataire</option>
          <option value="Autre">Autre</option>
        </select>
        </div>  

        

      <div class="input-box">
        <span class="details">
          Email
        </span>
        <input type="text" placeholder="Entrez le Email" required name="email">
        
        </div>
        <div class="input-box">
          <span class="details">
            Mot de passe 
          </span>
          <input type="password" placeholder="Entrez Mdp" required name="mdp"> 
          
          </div>
          
<!--<div class="input-box">
            <span class="details">
             confirmer Mdp 
            </span>
            <input type="text" placeholder="Entrez Mdp" required>
            
            </div>  -->

             

</div>


<div class="autre-detail">


<span class="detail-titre">
  Sexe
</span>
  <input type="radio" name="genre" id="rad-un" value="Homme">
  <input type="radio" name="genre" id="rad-deux" value="Femme">
  

<div class="category">
  
<label for="rad-un">
<span class="genre-un"></span>
<span class="genre">Homme</span>
</label>
 
<label for="rad-deux">
<span class="genre-un"></span>
<span class="genre">Femme</span>
</label> 


</div>




</div>


<div class="button">

<input type="submit" name="Ajouter" value="Ajouter">  

</div>
</form>




</div>




</body>
</html>

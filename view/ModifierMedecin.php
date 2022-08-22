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
  <li><a href="Planning.php">Planning</a></li>
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
 Modifier le médecin
</div>
<form  method="Post" >
<div class="detail">

<div class="input-box">
<span class="details">
  Nom
</span>
<input type="text" placeholder="Entrez le nom" required name="nom" value="<?=$ligne[1]?>">

</div>

<div class="input-box">
  <span class="details">
    Prénom
  </span>
  <input type="text" placeholder="Entrez le prenom " required name="prenom" value="<?=$ligne[2]?>">
  
  </div>

  <div class="input-box">
    <span class="details">
      lieu de naissance
    </span>
    <input type="text" placeholder="lieu de naissance
    " required name="lieu_naissance" value="<?=$ligne[3]?>">
    
    </div>  
    <div class="input-box">
      <span class="details">
      Date naissance
      </span>
      <input type="date" required name="date_naissance" value="<?=$ligne[4]?>">
      
      </div>
      <div class="input-box">
        <span class="details">
        Adresse
        </span>
        <input type="text" placeholder="entrez votre adresse" required name="adresse" value="<?=$ligne[5]?>"> 
        
        </div>

        <div class="input-box">
          <span class="details">
          Numéro de telephone
          </span>
          <input type="text" placeholder="entrez votre numéro de telephone" required name="numtel" value="<?=$ligne[6]?>">
          
          </div>  


      <div class="input-box">
        <span class="details">
        Service Médical
        </span>
        <!--<input type="text" placeholder="entrez votre service" required>-->
        <select id="pet-select" name="service">
          <option value="">--Choisir un Service--</option>
          <option value="<?=$ligne[13]?>"><?=$ligne[13]?>
          </option>
          
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
        <input type="text" placeholder="Entrez le Email" required name="email" value="<?=$ligne[10]?>">
        
        </div>
        <div class="input-box">
          <span class="details">
            Mot de passe 
          </span>
          <input type="password" placeholder="Entrez Mdp" required name="mdp" value="<?=$ligne[11]?>"> 
          
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

<input type="submit" name="Modifier" value="Modifier">  

</div>
</form>




</div>
<?php 

if (isset($_POST['Modifier'])) {

  $nom1=$_POST['nom'];
  $prenom1=$_POST['prenom'];
  $lieu1=$_POST['lieu_naissance'];
  $adr1=$_POST['adresse'];
  $num1=$_POST['numtel'];
  $service1=$_POST['service'];
  $grade1=$_POST['grade'];
  $nationalite1=$_POST['nationalite'];
  $status1=$_POST['status'];
  $email1=$_POST['email'];
  $mdp1=$_POST['mdp'];
  $genre1=$_POST['genre'];
  $date_N1=date('y-m-d',strtotime($_POST['date_naissance']));
 //verification est ce que les champs sont bien récupéré 
  //var_dump($_POST);
  //convertir en chaine de carachtere 
$id=( int )$islam;

  $sql4="UPDATE medec SET  Nom='$nom1',Prenom='$prenom1',Lieu_naissance='$lieu1',Date_naissance='$date_N1',Adresse='$adr1',Numero_tel='$num1' ,Grade='$grade1' ,Nationalite='$nationalite1',Statut='$status1',Email='$email1',Mdp='$mdp1',Genre='$genre1' where Id=$id";
  //regarder le resultat de la requete 
   //var_dump($sql4);
  $message5=mysqli_query($con,$sql4);

  echo "<SCRIPT LANGUAGE='JavaScript'>
  document.location.href='ListeMedecins.php'
  </SCRIPT>";
  /*header('Location:ListeMedecins.php');*/
  //var_dump($message5);
  
}













?>


</body>
</html>
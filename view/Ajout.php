<?php 
session_start();
$host='localhost';
$user='root';
$pdw='';
$dbname='projet';
$con= mysqli_connect($host,$user,$pdw,$dbname);
 

//if ($con) {
 // echo'vrai';
//}



//if ($con) {
 // echo'vrai';
//}
 



  



//verification de la connexion a la base de donnée
//if ($con) {
 // echo'resultat bien trouvé' ;
 //}else {
 //echo'fals';
 //}

if (isset($_POST['Ajouter'])) {
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
 

 $sql = "INSERT INTO medec(Nom,Prenom,Lieu_naissance,Date_naissance,Adresse,Numero_tel,Grade,Nationalite,Statut,Email,Mdp,Genre,Service) VALUES('$nom1','$prenom1','$lieu1','$date_N1','$adr1','$num1','$grade1','$nationalite1','$status1','$email1','$mdp1','$genre1','$service1')"; 
 
 
 
 $message=mysqli_query($con,$sql); 

 header('Location:ListeMedecins.php');

}


if (isset($_POST['Ajout'])) {
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
 

 $sql = "INSERT INTO infirmier(Nom,Prenom,Lieu_naissance,Date_naissance,Adresse,Numero_tel,Grade,Nationalite,Statut,Email,Mdp,Genre,Service) VALUES('$nom1','$prenom1','$lieu1','$date_N1','$adr1','$num1','$grade1','$nationalite1','$status1','$email1','$mdp1','$genre1','$service1')"; 
 
 
 
 $message=mysqli_query($con,$sql); 

 header('Location:ListesInfirmier.php');

}


if (isset($_GET['ij'])) 

{
  //var_dump($_GET['ik']);
  $iden=$_GET['ij'];
  

$sql3=" DELETE FROM medec where id=$iden ";
$islal=mysqli_query($con,$sql3); 
//if ($islal) {
  header('Location:ListeMedecins.php');
//}else {
  //$sql4=" DELETE FROM infirmier where id=$iden ";
  //$islal2=mysqli_query($con,$sql4); 

  //header('Location:ListesInfirmier.php');
//}

}

if (isset($_GET['ik'])) 

{
  //var_dump($_GET['ik']);
  $iden=$_GET['ik'];
  

$sql3=" DELETE FROM infirmier where id=$iden ";
$islal=mysqli_query($con,$sql3); 
//if ($islal) {
  //header('Location:ListeMedecins.php');
//}else {
  //$sql4=" DELETE FROM infirmier where id=$iden ";
  //$islal2=mysqli_query($con,$sql4); 
  header('Location:ListesInfirmier.php');
//}

}

if (isset($_GET['im'])) {
  $islam= $_GET['im'];
  $sql3="SELECT * FROM medec where id=$islam";
  $message3=mysqli_query($con,$sql3);
  $ligne=mysqli_fetch_row($message3);
  require_once 'ModifierMedecin.php';
  


}

if (isset($_GET['iz'])) {
  $islam= $_GET['iz'];
  $sql3="SELECT * FROM infirmier where id=$islam";
  $message3=mysqli_query($con,$sql3);
  $ligne=mysqli_fetch_row($message3);
  require_once 'ModifierInfirmier.php';


}


if (isset($_GET['js'])) {
  $islam= $_GET['js'];
  $sql3="SELECT * FROM infirmier where id=$islam";
  $message3=mysqli_query($con,$sql3);
  $ligne=mysqli_fetch_row($message3);
  require_once 'profil.php';


}
if (isset($_GET['jx'])) {
  $islam= $_GET['jx'];
  $sql3="SELECT * FROM medec where id=$islam";
  $message3=mysqli_query($con,$sql3);
  $ligne=mysqli_fetch_row($message3);
  require_once 'profil.php';


}



if (isset($_POST['Garde'])) {
  $id1=$_POST['id'];
  $date_d1=date('y-m-d',strtotime($_POST['date_d']));
  $date_f1=date('y-m-d',strtotime($_POST['date_f']));

  $sql23= "SELECT * FROM medec WHERE Id=$id1";
  $brief=mysqli_query($con,$sql23);
  $mot=mysqli_fetch_row($brief);
  
  $titre='Dr'.' '.$mot[1].' '.$mot[2];

 $sql = "INSERT INTO gardemedecin(title,start,end,idmed,color) VALUES('$titre','$date_d1','$date_f1','$id1','green')"; 
 
 
 
 $message=mysqli_query($con,$sql); 

 header('Location:Planning.php');

}

if (isset($_POST['GardeInf'])) {
  $id1=$_POST['id'];
  $date_d1=date('y-m-d',strtotime($_POST['date_d']));
  $date_f1=date('y-m-d',strtotime($_POST['date_f']));

  $sql23= "SELECT * FROM infirmier WHERE id=$id1";
  $brief=mysqli_query($con,$sql23);
  $mot=mysqli_fetch_row($brief);
  
  $titre='Inf'.' '.$mot[1].' '.$mot[2];

 $sql = "INSERT INTO gardeinfirmier(title,start,end,color,idInf) VALUES('$titre','$date_d1','$date_f1','red','$id1')"; 
 
 
 
 $message=mysqli_query($con,$sql); 

 header('Location:Planning.php');

}
?>
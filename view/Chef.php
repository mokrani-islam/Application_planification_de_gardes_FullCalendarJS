<?php 
session_start();
$host='localhost';
$user='root';
$pdw='';
$dbname='projet';
$con= mysqli_connect($host,$user,$pdw,$dbname);


if (isset($_POST['email']) && isset($_POST['mdp'])) {
var_dump($_POST);
 
  $username = mysqli_real_escape_string($con,htmlspecialchars($_POST['email'])); 
  $password = mysqli_real_escape_string($con,htmlspecialchars($_POST['mdp']));

 


 if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM Chef where Email= '".$username."' AND Mdp = '".$password."' ";
        $exec_requete = mysqli_query($con,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);

        $count = $reponse['count(*)'];

        $requete1 = "SELECT count(*) FROM medec where Email= '".$username."' AND Mdp = '".$password."' ";
        $exec_requete1 = mysqli_query($con,$requete1);
        $reponse1      = mysqli_fetch_array($exec_requete1);
        $count1 = $reponse1['count(*)'];

        $requete2 = "SELECT count(*) FROM infirmier where Email= '".$username."' AND Mdp = '".$password."' ";
        $exec_requete2 = mysqli_query($con,$requete2);
        $reponse2      = mysqli_fetch_array($exec_requete2);
        $count2 = $reponse2['count(*)'];

        
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {  
           $sql="SELECT Service from chef where Email='".$username."'";
           $ser= mysqli_query($con,$sql);
           $svg = mysqli_fetch_row($ser);
           $_SESSION['service'] = $svg[0];
           $_SESSION['username'] = $username;
           
           $sql11="SELECT Nom from chef where Email='".$username."'";
           $nom1= mysqli_query($con,$sql11);
           $svg1 = mysqli_fetch_row($nom1);
           $_SESSION['nom11'] = $svg1[0];


           $sql12="SELECT Prenom from chef where Email='".$username."'";
           $prenom1= mysqli_query($con,$sql12);
           $svg2 = mysqli_fetch_row($prenom1);
           $_SESSION['prenom11'] = $svg2[0];
           

            $sql="SELECT Id From chef where email='".$username."'";
            $id= mysqli_query($con,$sql);
           $svg1 = mysqli_fetch_row($id);
           $_SESSION['id'] = $svg1[0];


           $_SESSION['type']='chef';
          



           header('Location:AcceuilChefDeService.php');

        }  elseif($count1!=0){

           $sql="SELECT Service from medec where Email='".$username."'";
           $ser= mysqli_query($con,$sql);
           $svg = mysqli_fetch_row($ser);
           $_SESSION['service'] = $svg[0];
           $_SESSION['username'] = $username;

           $sql11="SELECT Nom from medec where Email='".$username."'";
           $nom1= mysqli_query($con,$sql11);
           $svg1 = mysqli_fetch_row($nom1);
           $_SESSION['nom11'] = $svg1[0];


           $sql12="SELECT Prenom from medec where Email='".$username."'";
           $prenom1= mysqli_query($con,$sql12);
           $svg2 = mysqli_fetch_row($prenom1);
           $_SESSION['prenom11'] = $svg2[0];

           $_SESSION['type']='medecin';

           header('Location:AcceuilMedecin.php');

        } elseif($count2!=0){

           $sql="SELECT Service from infirmier where Email='".$username."'";
           $ser= mysqli_query($con,$sql);
           $svg = mysqli_fetch_row($ser);
           $_SESSION['service'] = $svg[0];
           $_SESSION['username'] = $username;

           $sql11="SELECT Nom from infirmier where Email='".$username."'";
           $nom1= mysqli_query($con,$sql11);
           $svg1 = mysqli_fetch_row($nom1);
           $_SESSION['nom11'] = $svg1[0];


           $sql12="SELECT Prenom from infirmier where Email='".$username."'";
           $prenom1= mysqli_query($con,$sql12);
           $svg2 = mysqli_fetch_row($prenom1);
           $_SESSION['prenom11'] = $svg2[0];

           $_SESSION['type']='infirmier';

           header('Location:AcceuilInfirmier.php');
        }
        else
        {
           header('Location:Connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location:Connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: Connexion.php');
}


mysqli_close($con); // fermer la connexion
?>
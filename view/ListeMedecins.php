<?php 
require_once 'header.php';
?>
<div class="table">
<div class="table-list">
  <p>Listes des Médecins</p>

  <?php
  if( $type=='chef') {
   /* <input type='text' placeholder='Recherche'>*/
    echo "
    <div>
    

  <button class='Ajout'> <a href='AjoutInfirmier.php'>Ajouter</a></button>
    </div>
    ";
  }
  
  
  ?>


</div>

</div> 

<table>
<thead>
<tr>
<th>Id</th>
<th>Nom</th>
<th>Prenom</th>
<th>Grade</th>
<th>Service</th>
<TH>Action</TH>




</tr>



</thead>
<tbody>
<?php 

            /*session_start();
            $type=$_SESSION['type'];*/
            $SerMed=$_SESSION['service'];
            $host='localhost';
            $user='root';
            $pdw='';
            $dbname='projet';
            $con= mysqli_connect($host,$user,$pdw,$dbname);
            
            //if ($con) {
              //echo 'connexion reussie';
            //}

            $link= "SELECT * FROM medec ";
            
            $sql1=mysqli_query($con,$link);
            
            while ($svg = mysqli_fetch_row($sql1)) {
                 if ($svg[13]==$SerMed) {
                  # code...
                 

              echo"

              <tr>
              <td>$svg[0]</td>
              <td>$svg[1]</td>
              <td>$svg[2]</td>
              <td>$svg[7]</td>
              <td>$svg[13]</td>";

              if ($type=='chef') {
                echo "
                <td> 

              
              <a href='Ajout.php?ij=$svg[0]'> <i class='fas fa-user-times'></i></a>
              <a href='Ajout.php?im=$svg[0]'><i class='far fa-edit'></i></a> 
              </td>
                ";
              }else {
                echo "
                    
                    <td>
                    <a href='Ajout.php?jx=$svg[0]'><i class='far fa-address-book'></i></a>
                    </td>
                    
                    ";
              }
              

            echo "</tr>";
             
             

            }
          }
            
            ?>








</tbody>



</table>


</div>





    </body>
    </html>
    
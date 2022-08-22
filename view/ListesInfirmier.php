<?php 
require_once 'header.php';
?>
<div class="table">
<div class="table-list">
  <p>Listes des Infirmiers</p>

  <?php
  if($type=='chef'){
    /*<input type='text' placeholder='Recherche'>*/
    echo "
    <div>
  <button class='Ajout'> <a href='AjoutInfirmier.php'>Ajouter</a></button>
    </div>
    ";
  }
  
  
  ?>



</div>

</div>     


<div class="tableau">
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

            $SerMed=$_SESSION['service'];
            $host='localhost';
            $user='root';
            $pdw='';
            $dbname='projet';
            $con= mysqli_connect($host,$user,$pdw,$dbname);
            
            //if ($con) {
              //echo 'connexion reussie';
            //}

            $link1= "SELECT * FROM infirmier ";
            
            $sql2=mysqli_query($con,$link1);
            
            while ($svg = mysqli_fetch_row($sql2)) {
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
                  <a href='Ajout.php?iz=$svg[0]'><i class='far fa-edit'></i></a> 
                  </td>
                    ";
                  }else {
                       
                    echo "
                    
                    <td>
                    <a href='Ajout.php?js=$svg[0]'><i class='far fa-address-book'></i></a>
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
    
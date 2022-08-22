<?php 


session_start();
$host='localhost';
$user='root';
$pdw='';
$dbname='projet';
$con= mysqli_connect($host,$user,$pdw,$dbname);

$ser=$_SESSION['service'];



$sql = "SELECT g.id,title,start,end,color FROM gardeMedecin g ,medec m where g.idmed=m.Id and Service ='$ser'";
$result =$con->query($sql);




$eventsArr =array();

if ($result->num_rows >0) {
  
  while ($row =$result ->fetch_assoc()) {

    array_push($eventsArr, $row);
  }
}
  
  $sql1 = "SELECT g.id,title,start,end,color FROM gardeinfirmier g , infirmier i where g.idInf=i.Id and Service ='$ser'";
$result1 =$con->query($sql1);


if ($result1->num_rows >0) {
  
  while ($row1 =$result1 ->fetch_assoc()) {

    array_push($eventsArr, $row1);
  }
}

echo json_encode($eventsArr);
/*if ($_GET['start'] && $_GET['end'] ){
 var_dump($_GET);
  
 $sat=$_GET['start'];
  $end=$_GET['end'];
   var_dump($sat);
 $sql = "SELECT * FROM gardemed WHERE start BETWEEN $sat AND $end ";
 $result =$con->query($sql);

 $eventsArr =array();

 if ($result->num_rows >0) {
  
  while ($row =$result ->fetch_assoc()) {

    array_push($eventsArr,$row);
  }

 }

 echo json_encode($eventsArr);





}
*/ 
























?>
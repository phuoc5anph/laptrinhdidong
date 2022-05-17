<?php
include "ketnoiinter.php";
header('Content-Type: application/json');
$mangvanchuyen = array();
$query = "SELECT*FROM vanchuyen ";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
array_push($mangvanchuyen,new vanchuyen(
$row['id'],
$row['tendonvi'],
$row['phiship'],
$row['imgdv']
));

}
echo json_encode($mangvanchuyen);
class vanchuyen{
function vanchuyen($id,$tendonvi,$phiship,$imgdv){
$this->id= $id;
$this->tendonvi= $tendonvi;
$this->phiship= $phiship;
$this->imgdv= $imgdv;

}
}
?>
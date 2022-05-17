<?php
include "ketnoiinter.php";
header('Content-Type: application/json');
$mangdungcu = array();
$query = "SELECT*FROM dodung ";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
array_push($mangdungcu,new dodung(
$row['id'],
$row['tenhang'],
$row['gia'],
$row['img'],
$row['mota']));

}
echo json_encode($mangdungcu);
class dodung{
function dodung($id,$tenhang,$gia,$img,$mota){
$this->id= $id;
$this->tenhang= $tenhang;
$this->gia= $gia;
$this->img= $img;
$this->mota= $mota;

}
}
?>
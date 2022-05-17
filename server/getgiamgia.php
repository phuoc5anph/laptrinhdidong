<?php
include "ketnoiinter.php";
header('Content-Type: application/json');
$manggiamgia = array();
$query = "SELECT*FROM giamgia ";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
array_push($manggiamgia,new giamgia(
$row['id'],
$row['tencay'],
$row['gia'],
$row['giamoi'],
$row['sale'],
$row['igmcay'],
$row['mota'],
$row['idhang']));

}
echo json_encode($manggiamgia);
class giamgia{
function giamgia($id,$tencay,$gia,$giamoi,$sale,$igmcay,$mota,$idhang){
$this->id= $id;
$this->tencay= $tencay;
$this->gia= $gia;
$this->giamoi= $giamoi;
$this->sale= $sale;
$this->igmcay= $igmcay;
$this->mota= $mota;
$this->idhang= $idhang;
}
}
?>
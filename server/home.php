<?php
 include "ketnoiinter.php";
header('Content-Type: application/json');
$manghome = array();
$query = "SELECT*FROM trangchu ";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
array_push($manghome,new trangchu(
$row['id'],
$row['tensp'],
$row['giasp'],
$row['igmsp'],
$row['mota']));

}
echo json_encode($manghome);
class trangchu{
function trangchu($id,$tensp,$giasp,$igmsp,$mota){
$this->id= $id;
$this->tensp= $tensp;
$this->giasp= $giasp;
$this->igmsp= $igmsp;
$this->mota= $mota;

}
}
?>
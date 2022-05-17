<?php
include "ketnoiinter.php";
$mangkhachhang = array();
 $idtk=$_POST['idtk'];
$query = "SELECT*FROM khachhang where FIND_IN_SET('$idtk',idtk) ";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
array_push($mangkhachhang,new khachhang(
	$row['idtk'],
$row['idkh'],
$row['hoten'],
$row['sdt'],
$row['diachi']));

}
echo json_encode($mangkhachhang);
class khachhang{
function khachhang($idtk,$idkh,$hoten,$sdt,$diachi){
$this->idtk=$idtk;

$this->idkh= $idkh;
$this->hoten= $hoten;
$this->sdt= $sdt;
$this->diachi= $diachi;

}
}
?>
<?php
include "ketnoiinter.php";

$idtk=$_POST['idtk'];
$idkh= $_POST['idkh'];
$hoten= $_POST['hoten'];
$sdt= $_POST['sdt'];
$diachi= $_POST['diachi'];

$query = "INSERT INTO khachhang (idtk,idkh,hoten,sdt,diachi) VALUES ( '$idtk','$idkh','$hoten','$sdt','$diachi')";
$data= mysqli_query($conn,$query);

if ($data) {
	echo "ok";
}else {
	echo "Error: ".$query."<br>".$conn->error;
}
?>
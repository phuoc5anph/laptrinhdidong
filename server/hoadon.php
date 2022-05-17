<?php
include "ketnoiinter.php";


	$idtk=$_POST['idtaikhoan'];
	$iddh= $_POST['madonhang'];
	$tenkh=$_POST['tenkh'];
	$sdt = $_POST['sdt'];
	$diachi = $_POST['diachi'];
	$ngay=$_POST['ngay'];
	$phiship = $_POST['phiship'];
	$tamtinh=$_POST['tamtinh'];
	$tien = $_POST['tongtien'];
		$trangthai = 'Chờ xác nhận';



$today = date('Y-m-d');
	$week = strtotime(date("Y-m-d", strtotime($today)) );
	$ngay = strftime("%Y-%m-%d", $week);
if(strlen($idtk)>0
	&&strlen($iddh)>0
	&&strlen($tenkh)>0
	&&strlen($sdt)>0
	&&strlen($diachi)>0
	&&strlen($ngay)>0
	&&strlen($phiship)>0
	&&strlen($tamtinh)>0
	&&strlen($tien)>0
	&&strlen($trangthai)>0)
{


	$query = "INSERT INTO hoadon (idtaikhoan,madonhang,tenkh,sdt,diachi,ngay,phiship,tamtinh,tongtien,trangthai)
	VALUES ('$idtk','$iddh','$tenkh','$sdt','$diachi','$ngay','$phiship','$tamtinh','$tien','$trangthai')";
	$data= mysqli_query($conn,$query);
}
if ($data) {
	echo "ok";
}else {
	echo "Error: ".$query."<br>".$conn->error;
}
?>
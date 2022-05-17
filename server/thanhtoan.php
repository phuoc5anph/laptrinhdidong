<?php
include "ketnoiinter.php";
$json =$_POST['json'];
$data = json_decode($json,true);
foreach ($data as $VALUES) {
	$idtk=$VALUES['idtaikhoan'];
	$iddh= $VALUES['madonhang'];
	$masp=$VALUES['masp'];
	$tensp=$VALUES['tensp'];
	$giasp = $VALUES['giasp'];
	$soluong = $VALUES['soluong'];
	$tenkh=$VALUES['tenkh'];
	$sdt = $VALUES['sdt'];
	$diachi = $VALUES['diachi'];
	$ngay=$VALUES['ngay'];
	$phiship = $VALUES['phiship'];
	$tamtinh = $VALUES['tamtinh'];
	$tien = $VALUES['tongtien'];


	$query = "INSERT INTO donhang (idtaikhoan,madonhang,masp,tensp,giasp,soluong,tenkh,sdt,diachi,ngay,phiship,tamtinh,tongtien)
	VALUES ('$idtk','$iddh','$masp','$tensp','$giasp','$soluong','$tenkh','$sdt','$diachi','$ngay','$phiship','$tamtinh','$tien')";
	$data= mysqli_query($conn,$query);
}
if ($data) {
	echo "ok";
}else {
	echo "Error: ".$query."<br>".$conn->error;
}

?>
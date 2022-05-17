<?php
include "ketnoiinter.php";
$json =$_POST['json'];
$data = json_decode($json,true);
foreach ($data as $VALUES) {
//	$idct=$VALUES['idchitiet'];
	$iddh=$VALUES['idhd'];
	$masp=$VALUES['masp'];
	$tensp=$VALUES['tensp'];
	$giasp = $VALUES['giasp'];
	$img=$VALUES['imgsp'];
	$soluong = $VALUES['soluong'];
	
	$query = "INSERT INTO chitiethoadon (idchitiet,idhd,masp,tensp,giasp,imgsp,soluong)
	VALUES (null,'$iddh','$masp','$tensp','$giasp','$img','$soluong')";
	$data= mysqli_query($conn,$query);
}
if ($data) {
	echo "ok";
}else {
	echo "lỗi ";
}
?>
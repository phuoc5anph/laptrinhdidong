<?php
include "ketnoiinter.php";
$json =$_POST['json'];
$data = json_decode($json,true);
foreach ($data as $VALUES) {
	$idtk=$VALUES['idtk'];
		$idyt=$VALUES['idyt'];
	$tensp=$VALUES['tensp'];
	$giasp = $VALUES['giasp'];
		$mota=$VALUES['mota'];
	$imgsp = $VALUES['imgsp'];
	

	$query = "INSERT INTO yeuthich (idtk,idyt,tensp,giasp,mota,imgsp)
	VALUES ('$idtk',$idyt','$tensp','$giasp','$mota','$imgsp')";
	$data= mysqli_query($conn,$query);
}
if ($data) {
	echo "ok";
}else {
	echo "lỗi ";
}

?>
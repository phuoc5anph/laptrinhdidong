<?php
	include("ketnoiinter.php");
	$madonhang=$_POST['madonhang'];
	$trangthai=$_POST['trangthai'];
	// $madonhang="2";
	// $trangthai="giaoroi";
	$sql="UPDATE hoadon SET trangthai ='$trangthai'  WHERE madonhang = '$madonhang'";
	if($conn->query($sql))
	{
		echo "success";
		}
	else 
	{
		echo "error";
		}
?>
<?php
	include("ketnoiinter.php");
	$tk=$_POST['taikhoan'];
	$matkhau=$_POST['matkhau'];
	$hoten=$_POST['hoten'];
	$gioitinh=$_POST['gioitinh'];
	$sdt=$_POST['sdt'];
	$diachi=$_POST['diachi'];
	$gmail=$_POST['gmail'];

	$sql="UPDATE login SET matkhau ='$matkhau',hoten='$hoten',gioitinh='$gioitinh',sdt='$sdt',diachi='$diachi',gmail='$gmail'  WHERE taikhoan = '$tk'";
	if($conn->query($sql))
	{
		echo "success";
		}
	else 
	{
		echo "error";
		}
?>
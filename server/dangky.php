</<?php 
include "ketnoiinter.php"; 
$tk= $_POST["taikhoan"];
$mk= $_POST["matkhau"];
$ten=$_POST["hoten"];
$gioitinh=$_POST["gioitinh"];
$date=$_POST["date"];
$sdt=$_POST["sdt"];
$diachi=$_POST["diachi"];
$email=$_POST["gmail"];




$check=' SELECT * FROM login WHERE taikhoan="'.$tk.'"';
$tontai=mysqli_query($conn,$check);
if($tontai->num_rows>=1){
	echo "tontai";
}else{
	$query="INSERT INTO login(`taikhoan`, `matkhau`, `hoten`, `sdt`, `gmail`) 
	VALUES('$tk','$mk','$ten','$sdt', '$email')";
	$data= mysqli_query($conn,$query);
	if($data){
		echo "register";
		}
	else{
		echo "Error: ".$query."<br>".$conn->error;
	}
}
 ?>
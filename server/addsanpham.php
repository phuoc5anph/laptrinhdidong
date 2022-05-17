<?php
require "ketnoiinter.php";
$response= array();
$ten= $_POST['tensp'];
$gia= $_POST['giasp'];
$igm= $_POST['igmsp'];
$mota= $_POST['mota'];
$query = "INSERT INTO trangchu (id,tensp,giasp,igmsp,mota)  VALUES (null, '$ten','$gia','$igm','$mota')";
$query=mysqli_query($conn,$query);
	if($query){
		echo "ok";
	}else{
		echo "Error: ".$query."<br>".$conn->error;
	}

?>

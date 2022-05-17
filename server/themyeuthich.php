<?php
include "ketnoiinter.php";
	$idtk=$_POST['idtk'];

	$id=$_POST['idyt'];
	$tensp=$_POST['tensp'];
	$gia = $_POST['gia'];
	$mota=$_POST['mota'];
	$img=$_POST['img'];
	$query = "INSERT INTO yeuthich (idtk,idyt,tensp,gia,mota,img) VALUES ('$idtk','$id','$tensp','$gia','$mota','$img')";
	if ($conn->query($query) === TRUE) {
	$last_id = $conn->insert_id;
	echo $last_id;
}else {
	echo "Error: ".$query."<br>".$conn->error;
}
$conn->close();
?>
<?php
require "ketnoiinter.php";

$id=$_POST['id'];
$tensp=$_POST['tensp'];
$giasp=$_POST['giasp'];
$imgsp=$_POST['igmsp'];
$mota=$_POST['mota'];

$sql="UPDATE trangchu SET tensp='$tensp',giasp='$giasp',igmsp='$imgsp',mota='$mota' WHERE id='$id' ";
$result= mysqli_query($conn,$sql);
	if($result){
		echo "ok";
		}
	else{
		echo "Error: ".$query."<br>".$conn->error;
	}
?>


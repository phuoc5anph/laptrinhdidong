<?php 
require "ketnoiinter.php";
$madonhang = $_POST['madonhang'];
$query = "DELETE FROM hoadon Where madonhang= '$madonhang'";
if(mysqli_query($conn,$query)){
	echo "ok";
}
else{
	echo "Error: ".$query."<br>".$conn->error;
}

?>
<?php 
require "ketnoiinter.php";
$idsp = $_POST['id'];
$query = "DELETE FROM trangchu Where id= '$idsp'";
if(mysqli_query($conn,$query)){
	echo "ok";
}
else{
	echo "loi";
}

?>
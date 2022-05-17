<?php 
require "ketnoiinter.php";
$idyt = $_POST['idyt'];
$query = "DELETE FROM yeuthich Where idyt= '$idyt'";
if(mysqli_query($conn,$query)){
	echo "ok";
}
else{
	echo "Error: ".$query."<br>".$conn->error;
}

?>
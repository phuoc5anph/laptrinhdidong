<?php
include "ketnoiinter.php";
class trangchu{
function trangchu($id,$tensp,$giasp,$igmsp,$mota){
$this->id= $id;
$this->tensp= $tensp;
$this->giasp= $giasp;
$this->igmsp= $igmsp;
$this->mota= $mota;

}
}
$manghome = array();

if (isset($_POST['tukhoa'])) {
$query=$_POST['tukhoa'];
//	$query = "SELECT * FROM trangchu Where lower(tencay) Like '%$tukhoa%'";
$data= mysqli_query($conn, $query);
while ($row= mysqli_fetch_assoc($data)) {
 array_push($manghome,new trangchu(
$row['id'],
$row['tensp'],
$row['giasp'],
$row['igmsp'],
$row['mota']));

}
if (empty($manghome)) {
	echo "null";
}
echo json_encode($manghome);

$conn->close();
}
else echo "lỗi";



?>
<?php
include "ketnoiinter.php";
class chitietdonhang{
function chitietdonhang($idct,$madonhang,$masp,$tensp,$giasp,$imgsp,$soluong){
	$this->idchitiet=$idct;
$this->idhd= $madonhang;
$this->masp= $masp;
$this->tensp= $tensp;
$this->giasp= $giasp;
$this->imgsp= $imgsp;
$this->soluong= $soluong;


}
}
$mangchitietdonhang = array();
 $madonhang=$_POST['idhd'];
 $query = "SELECT * FROM chitiethoadon where idhd = '$madonhang'" ;
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
array_push($mangchitietdonhang,new chitietdonhang(
$row['idchitiet'],
$row['idhd'],
$row['masp'],
$row['tensp'],
$row['giasp'],
$row['imgsp'],
$row['soluong']
));

}
// echo json_encode($mangchitietdonhang);

if ($data) {
	echo json_encode($mangchitietdonhang);
}else {
	echo "Error: ".$query."<br>".$conn->error;
}
?>
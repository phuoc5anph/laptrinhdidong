<?php
include "ketnoiinter.php";
class donhang{
function donhang($idtk,$madonhang,$tenkh,$sdt,$diachi,$ngay,$phiship,$tamtinh,$tongtien){
	$this->idtaikhoan=$idtk;
$this->madonhang= $madonhang;
$this->tenkh= $tenkh;
$this->sdt= $sdt;
$this->diachi= $diachi;
$this->ngay= $ngay;
$this->phiship= $phiship;
$this->tamtinh= $tamtinh;
$this->tongtien= $tongtien;
}
}
$mangdonhang = array();

 $query = "SELECT *FROM hoadon " ;
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
array_push($mangdonhang,new donhang(
	$row['idtaikhoan'],
$row['madonhang'],
$row['tenkh'],
$row['sdt'],
$row['diachi'],
$row['ngay'],
$row['phiship'],
$row['tamtinh'],
$row['tongtien']
));
}
echo json_encode($mangdonhang);

?>
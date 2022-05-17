<?php
	include"ketnoiinter.php";
	// $idkhachhang=$_POST['idkhachhang'];
	$query="SELECT c.idtaikhoan,c.madonhang,c.tenkh, c.sdt,c.diachi,c.ngay, c.phiship, c.tamtinh, c.tongtien, c.trangthai
			FROM hoadon c
			 order by c.ngay desc";
	$data=$conn->query($query);
	$mangtrangthai=array();	
	while($row = $data->fetch_assoc()){
		array_push($mangtrangthai,new Trangthai(
			$row['idtaikhoan'],
$row['madonhang'],
$row['tenkh'],
$row['sdt'],
$row['diachi'],
$row['ngay'],
$row['phiship'],
$row['tamtinh'],
$row['tongtien'],
$row['trangthai']

));
	}
	class Trangthai{
		function Trangthai($idtk,$madonhang,$tenkh,$sdt,$diachi,$ngay,$phiship,$tamtinh,$tongtien,$trangthai){
	$this->idtaikhoan=$idtk;
$this->madonhang= $madonhang;
$this->tenkh= $tenkh;
$this->sdt= $sdt;
$this->diachi= $diachi;
$this->ngay= $ngay;
$this->phiship= $phiship;
$this->tamtinh= $tamtinh;
$this->tongtien= $tongtien;
$this->trangthai= $trangthai;


		}
	}
	echo json_encode($mangtrangthai);
?>
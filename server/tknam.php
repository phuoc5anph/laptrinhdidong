<?php
include "ketnoiinter.php";
if(isset($_POST['query_user'])){
    $query= $_POST['query_user'];
   // $query= "SELECT Year(ngaydathang) as thoigian, sum(tongtien) as tongtien FROM donhang WHERE trangthai = 4 AND Year(ngaydathang) >= "+nam+ -4" AND  Year(ngaydathang) <=  "+nam+" GROUP BY Year(ngaydathang)";
    $data= mysqli_query($conn,$query);
	$mangsp = array();
	while ($row= mysqli_fetch_assoc($data)) {
		array_push($mangsp, new thongke(
			$row['ngay'],
			$row['tongtien']));
	} 
	echo json_encode($mangsp);
}echo "Lỗi post";
	class thongke{
	function thongke($thoigian, $tongtien){
		$this->ngay = $thoigian;

		$this->tongtien = $tongtien;

	}
}
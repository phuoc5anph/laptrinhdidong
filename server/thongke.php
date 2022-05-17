<?php
include("ketnoiinter.php");
$query="SELECT MONTH(hoadon.ngay)as 'thang',
  sum(hoadon.tongtien)as  'tongtien'
FROM hoadon
WHERE year(hoadon.ngay)=2020
GROUP BY MONTH(hoadon.ngay)";
$data = mysqli_query($conn,$query);

class thongke{
	function thongke($thang,$tongtien){
	$this->thang=$thang;
	$this->tongtien=$tongtien;
}
}
$mangthongke=array();
while ($row=mysqli_fetch_assoc($data)) {
	array_push($mangthongke, new thongke($row['thang'],$row['tongtien']));
}
echo json_encode($mangthongke);

?>
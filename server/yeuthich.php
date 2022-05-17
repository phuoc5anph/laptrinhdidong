<?php
include "ketnoiinter.php";
class yeuthich {
function yeuthich($idtk,$idyt,$tensp,$gia,$img,$mota){
$this->idtk=$idtk;
$this->idyt= $idyt;
$this->tensp= $tensp;
$this->gia= $gia;
$this->img= $img;
$this->mota= $mota;
}
}
$mangyeuthich = array();

 $idtk=$_POST['idtk'];

 $query = "SELECT *FROM yeuthich where FIND_IN_SET('$idtk',idtk)";

$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data)){
array_push($mangyeuthich,new yeuthich(
$row['idtk'],
$row['idyt'],
$row['tensp'],
$row['gia'],
$row['img'],
$row['mota']));

}
echo json_encode($mangyeuthich);


?>
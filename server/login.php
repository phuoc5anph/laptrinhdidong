<?php 
    $connect= mysqli_connect('localhost','root','',"cuahangcay");
    mysqli_query($connect,"SET NAMES'utf8'");

    // $tk= $_POST["taikhoan"];
    // $mk= $_POST["matkhau"];
    // $tk='Chuvanvien';
    // $mk='Vien';

   // $sql=" SELECT * FROM login WHERE taikhoan='$tk' AND matkhau='$mk'";
      $sql=" SELECT * FROM login";
    $reponse= mysqli_query($connect,$sql);
    $result = array();
    $result['login'] = array();
    $row=mysqli_fetch_assoc($reponse);

    if(mysqli_num_rows($reponse)>0){
            $index['id'] = $row['id'];
        $index['taikhoan']=$row['taikhoan'];
        $index['matkhau'] = $row['matkhau'];
        $index['hoten'] = $row['hoten'];
        $index['gioitinh'] = $row['gioitinh'];
        $index['sdt'] = $row['sdt'];
        $index['gmail'] = $row['gmail'];
        $index['date'] = $row['date'];
        $index['diachi'] = $row['diachi'];
$index['imgtk']= $row['imgtk'];
        
        array_push($result['login'], $index);
        $result['success'] = "1";
        $result['message'] = "success";
        echo json_encode($result);
        mysqli_close($connect);
    }   
    else{
        $result['success'] = "0";
        $result['message'] = "Sai tai khoan hoac mat khau";
            echo json_encode($result);

            mysqli_close($connect);
    }
?>

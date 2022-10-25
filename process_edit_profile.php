<?php
 $id= $_GET['id'];
    $ten = $_POST['txtten']; 
    $diachi = $_POST['txtdiachi']; 
    $gioitinh = $_POST['txtgender']; 
    $ngaysinh = $_POST['txtngaysinh']; 
    $email = $_POST['txtemail']; 
    $sdt = $_POST['txtsdt']; 
    require_once 'config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE khachhang SET TenK='$ten',Gioitinh='$gioitinh',Diachi='$diachi',Ngaysinh='$ngaysinh',SĐT='$sdt',email='$email' WHERE MaK='$id'";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "<script type='text/javascript'>alert('Nhập sai');</script>";
    }else{
        header("location: user.php?id=$id"); 
    }

    mysqli_close($conn);
?>
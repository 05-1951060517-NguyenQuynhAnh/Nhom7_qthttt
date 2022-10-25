<?php
$id = $_GET['id'];
    $id1 = $_GET['id1'];
    require_once '../../config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE  FROM `sanpham` WHERE MaSP= '$id1' ";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        header("location: sanpham.php?id=$id");
    }else{
        header("location: error.php"); 
    }
    mysqli_close($conn);
?>
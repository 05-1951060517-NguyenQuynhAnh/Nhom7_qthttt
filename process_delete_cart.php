<?php
  
    $MaSP = $_GET['id'];
    $MaK = $_GET['id1'];  
    require_once 'config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "DELETE FROM giohang WHERE MaSP = '$MaSP'";
    $number = mysqli_query($conn,$sql);
    if($number > 0){
        header("location: cart.php?id=$MaK");
    }else{
        header("location: index.php"); 
    }
    mysqli_close($conn);
?>
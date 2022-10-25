<?php
    $id =$_GET['id1'];
    $size= $_POST['size']; 
    $sluong = $_POST['sluong']; 
    require_once 'config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql = "UPDATE giohang SET size='$size', soluong='$sluong' WHERE MaK=$id";
    $result = mysqli_query($conn,$sql);
    if(!$result){
        echo "<script type='text/javascript'>alert('Nhập sai');</script>";
    }else{
        header("location:cart.php?id=$id"); 
    }

    mysqli_close($conn);
?>
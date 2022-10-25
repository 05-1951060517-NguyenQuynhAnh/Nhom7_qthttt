<?php
$id = $_GET['id'];
    $MaSP = $_POST['txtMaSP'];
    $TenSP = $_POST['txtTenSP'];
    $Giaban = $_POST['txtGiaban'];
    $Gianhap = $_POST['txtGianhap'];
    $Soluong = $_POST['txtSoluong'];
    $Trangthai= $_POST['txtTrangthai'];
    $Mota = $_POST['txtMota'];
    $file3 = $_POST['file3'];

    require_once '../../config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    
    $sql01 = "SELECT * FROM sanpham where MaSP='$MaSP'";

    $result = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result) > 0){

    $error = "MaSP bị trùng";
    header("location:add_sanpham.php?id=$id&error=$error"); 
    }else{
    $sql = "INSERT INTO sanpham (MaSP,TenSP,Giaban,Gianhap,Soluong,Mota,Trangthai,img) VALUES('$MaSP','$TenSP','$Giaban','$Gianhap','$Soluong','$Mota','$Trangthai','$file3')";
    $result = mysqli_query($conn,$sql);
    if($result ==true){
        header("location:sanpham.php?id=$id"); 
    }else{
        $error = "Bạn nhập thông tin chưa đúng";
        header("location:add_sanpham.php?id=$id&error=$error");
    }
    }
    mysqli_close($conn);  
?>
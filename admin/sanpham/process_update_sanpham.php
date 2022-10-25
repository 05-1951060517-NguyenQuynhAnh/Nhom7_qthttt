<?php
$id = $_GET['id'];
$id1 = $_GET['id1'];
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
    $sql = "UPDATE sanpham SET TenSP='$TenSP', Giaban='$Giaban',Gianhap='$Gianhap',Soluong='$Soluong',Trangthai='$Trangthai',Mota='$Mota',img='$file3' WHERE MaSP='$id1'";
    $number = mysqli_query($conn,$sql);

    if($number > 0){
     header("location: sanpham.php?id=$id"); 
    }else{
        header("location: error.php"); 
    }

    mysqli_close($conn);
?>
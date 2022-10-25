<?php 
session_start();
require_once '../config/database.php';
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
        $id = $_GET['id'];
        $sql = "SELECT * FROM taikhoan WHERE id ='$id'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($row['chucvu'] =='admin'){             
                header("location:taikhoan/taikhoan.php?id=$id");
            }
            else{
                $error = "Xin lỗi! Bạn không phải là admin, không có quyền truy cập vào trang này";
                header("location:sanpham/sanpham.php?id=$id&error=$error");
            }
        }else{
            
        }
        mysqli_close($conn);
?>
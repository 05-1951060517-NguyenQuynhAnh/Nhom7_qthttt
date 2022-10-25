
<?php
    // addEmployee.php TRUYỀN DỮ LIỆU SANG
    // process-add-Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang

        $sluong = $_POST['sluong'];
        $id =$_GET['id'];
        $id1 =$_GET['id1'];
        $size = $_POST['size'];
        require_once '../config/database.php';
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "INSERT INTO giohang (MaSP,MaK,Soluong,size) VALUES('$id1','$id','$sluong','$size')";
        $number = mysqli_query($conn,$sql);

        if($number > 0){
            $error = "Thêm thành công";
            header("location:../detail.php?id=$id1&id1=$id&error=$error"); 
        }else{
            $error = "Sản phẩm này đã có trong giỏ hàng";
            header("location:../detail.php?id=$id1&id1=$id&error=$error"); 
        }
    
        mysqli_close($conn);
?>

<?php
    session_start();
    if(isset($_POST['btnLogin'])){
        $user = $_POST['txtuser'];
        $pass  = $_POST['txtpass'];
        require_once '../config/database.php';
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        $sql = "SELECT * FROM taikhoan WHERE email ='$user'AND password='$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $_SESSION['isLoginOK'] = $id;
            if($row['chucvu'] =='admin'){
                $_SESSION['isLoginOK_Admin'] = $row['chucvu'];
                header("location:index.php?id=$id");
            }
            else{
                header("location:sanpham/sanpham.php?id=$id");
            }
        }else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location:login.php?error=$error"); 
        }
        mysqli_close($conn);
    }else{
        //header("location:login.php");
    }
?>
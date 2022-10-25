<?php
    $gioitinh = $_POST['gender'];
    $hovaten = $_POST['hovaten'];
    $ngaysinh = $_POST['ngaysinh'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    if (!$gioitinh || !$hovaten || !$ngaysinh || !$email || !$matkhau )
    {
        $error = "Vui lòng nhập đầy đủ thông tin";
        header("location:signup.php?error=$error"); 
        exit;
    }
    $partten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if(!preg_match($partten ,$email, $matchs)){
    $error = "Nhập sai định dạng email";
    header("location:signup.php?error=$error"); 
    exit;}
    if (strlen($matkhau) < 6)
    { $error = "Mật khẩu quá ngắn, hãy thử với mật khẩu khác an toàn hơn.";
        header("location:signup.php?error=$error");
        exit;
    }   
    require_once 'config/database.php';
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    $sql01 = "SELECT * FROM khachhang WHERE email = '$email'";

    $result = mysqli_query($conn,$sql01);
    if(mysqli_num_rows($result) > 0){

    $error = "Tài khoản Email đã tồn tại";
    header("location:signup.php?error=$error"); 
    }else{
    $sql = "INSERT INTO khachhang(TenK, Gioitinh, Ngaysinh, email, matkhau) VALUES('$hovaten ', '$gioitinh', ' $ngaysinh','$email','$matkhau')";
    $result = mysqli_query($conn,$sql);
    if($result ==true){
        header("location:login.php"); 
    }else{
        $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
        header("location:signup.php?error=$error");
    }
    }
    mysqli_close($conn);  
?>

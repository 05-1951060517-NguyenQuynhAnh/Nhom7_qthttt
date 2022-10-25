<?php include('config/database.php'); 
?>
<?php 
    $id =$_GET['id'];
    $sql = "SELECT *,giohang.soluong*sanpham.Giaban as thanhtien FROM khachhang,giohang INNER JOIN sanpham ON sanpham.MaSP = giohang.MaSP WHERE khachhang.MaK='$id' ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="public/style1.css">
    <title>NHOM7 - Tiệm thời trang</title>
    <link rel="shortcut icon" href="img/1.png">
</head>

<body>
    <div class="header">
        <div class="container-fluid" style="background:#e68e12;">
            <div class="container content">
                <div class="container">
                    <div class="row">
                        <div class="col py-3" style="font-size:13px;">
                        NHOM7@GMAIL.COM | Hotline: 0837 473 645
                        </div>
                        <div class="col text-nowrap my-auto" style="font-size:13px;">
                            <p class="mb-0">
                                Tặng nay voucher trị giá 150.000VNĐ khi mua sản phẩm từ 1.000.000 VNĐ
                            </p>
                            <div class="text-center mx-auto">
                                Đơn hàng được FreeShip khi mua từ 500.000 VNĐ
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="">
                            <form action="search1.php?id=<?php echo $row['MaK'];?>" method="post">
                                    <div class="pt-2 ms-5 d-flex">
                                        <input class="py-2 rounded-start" type="text"
                                            style="border:none;padding-left: 10px;font-size:12px;width:250px"
                                            name="namesearch" placeholder="The clothes you need...">
                                        <button type="submit" class="border-0 rounded-0 rounded-end bg-white"> <svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018Z" />
                                                <path
                                                    d="M13 6.5a6.471 6.471 0 0 1-1.258 3.844c.04.03.078.062.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1.007 1.007 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5ZM6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11Z" />
                                            </svg></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row px-5">
                <div class="col-md-3 ">
                    <img src="img/logo.jpg" alt="" class="mt-2 ms-2 img-fluid">
                </div>
                <div class="col-md ps-0 mt-4">
                    <div class="row">
                        <div class="col-md">
                            <ul class="nav justify-content-center">
                                <li class="nav-item fw-bold ">
                                    <a class="nav-link link-dark pe-1" style="font-size:15px" aria-current="page"
                                        href="index1.php?id=<?php echo $row['email'];?>">TRANG CHỦ</a>
                                </li>
                                <li class="nav-item fw-bold">
                                    <a style="font-size:15px" class="pe-1 nav-link dropdown-toggle link-dark" href="#"
                                        id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        SẢN PHẨM
                                    </a>
                                    <ul
                                        class="dropdown-menu rounded-0 border-warning border-end-0 border-bottom-0 border-start-0 border-2">
                                        <li><a href="product/all1.php?id=<?php echo $row['MaK'];?> "class="dropdown-item" STYLE="font-size:13px" href="#">Shop All </a></li>
                                        <li><a href="product/top1.php?id=<?php echo $row['MaK'];?>"class="dropdown-item" STYLE="font-size:13px" href="#">TOP</a></li>
                                        <li><a href="product/bottom1.php?id=<?php echo $row['MaK'];?>"class="dropdown-item" STYLE="font-size:13px" href="#">BOTTOM</a></li>
                                        <li><a href="product/skirt1.php?id=<?php echo $row['MaK'];?>"class="dropdown-item" STYLE="font-size:13px" href="#">SKIRT</a></li>
                                        <li><a href="product/phukien1.php?id=<?php echo $row['MaK'];?>"class="dropdown-item" STYLE="font-size:13px" href="#">ACCESSORIES</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item fw-bold">
                                    <a class=" pe-1 nav-link link-dark" style="font-size:15px" href="huongdan1.php?id=<?php echo $row['MaK']; ?>">HƯỚNG DẪN</a>
                                </li>
                                <li class="nav-item fw-bold">
                                    <a class="pe-1 nav-link link-dark" style="font-size:15px" href="size1.php?id=<?php echo $row['MaK']; ?>">BẢNG SIZE</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 mt-1 d-flex">
                            <a href="user.php?id=<?php echo $row['MaK'];?>" class="text-decoration-none link-dark">
                                <div class="d-flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                                        class="bi bi-people me-2" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                    </svg>
                                    <p class="pt-1" style="font-size:13px"><?php
                                            
                                            $conn = mysqli_connect('localhost','root','','cse481');
                                            if(!$conn){
                                                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                            }
                                            // Bước 02: Thực hiện truy vấn
                                            $sql5 = "SELECT *FROM khachhang WHERE MaK='$id' ";
                                            $result5 = mysqli_query($conn,$sql5);
                                            // Bước 03: Xử lý kết quả truy vấn
                                            if(mysqli_num_rows($result5) > 0){
                                                while($row = mysqli_fetch_assoc($result5)){
                                            ?>
                                                                    <tr>
                                                                        <td><?php echo $row['TenK']; ?></td>
                                                                    </tr>
                                                                    <?php
                                                }
                                            }
                                            // Bước 04: Đóng kết nối Database Server
                             ?>
                                    </p>
                                </div>
                            </a>
                            <a href="logout.php" class="text-decoration-none link-dark">
                                <div class="ms-3">
                                    <p class="pt-1 fw-bold link-primary" style="font-size:13px">Đăng xuất</p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2" style="background:#f1f1f1">
            <div class="container">
                <p class="px-5 ms-2 py-2 text-muted" style="font-size:13px">Trang chủ / Giỏ hàng</p>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="px-5">

                <table class="table">
                    <thead>
                        <tr style="color:#888;">
                            <th class="col-md-4" scope="col">Tên sản phẩm</th>
                            <th scope="col">Phân loại hàng</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
          
          $sql2 = "SELECT *,giohang.soluong*sanpham.Giaban as thanhtien FROM khachhang,giohang INNER JOIN sanpham ON sanpham.MaSP = giohang.MaSP WHERE khachhang.MaK='$id'";
          $res2 = mysqli_query($conn, $sql2);
          $count2 = mysqli_num_rows($res2);
          if($count2>0)
          {
              while($row=mysqli_fetch_assoc($res2))
              {
      ?>
                        <tr>
                            <form action="process_update_cart.php?id=<?php echo $row['MaSP']; ?>&id1=<?php echo $row['MaK']; ?>"method="post">
                            <td class="">
                                <img class="d-inline" width="100px" height="100px"src="img/<?php echo $row['img']; ?>" alt="">
                                <p class="d-inline ms-3"><?php echo $row['TenSP']; ?></p>
                            </td>
                            <td class="pt-5">
                            <select style="width:80px" name="size">
                            <option value="SizeM">Size M</option>
                            <option value="SizeL">Size L</option>
                            <option value="SizeXL">Size XL</option>
                            <option value="SizeS">Size S</option>
                            <option value="<?php echo $row['size']; ?>" selected="selected"><?php echo $row['size']; ?></option>             
                        </select></td>
                            <td class="pt-5"><?php echo number_format($row['Giaban']); ?></td>
                            <td class="pt-5"><input style="width : 50px" name="sluong" type="number" prdchill="5"
                                    value="<?php echo $row['soluong']; ?>"></td>
                            <td class="pt-5 " style="color:red"><?php echo $row['thanhtien']; ?>đ</td>
                            <td class="pt-5">
                            <button type="submit" name="btnsua" style="background:white"
                        class="border-0">
                       
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                <path
                                    d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                            </svg>
                   
                    </button>
                                <a
                                    href="process_delete_cart.php?id=<?php echo $row['MaSP']; ?>&id1=<?php echo $row['MaK']; ?>">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="ms-3 bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </a>
                            </td>
                            </form>
                        </tr>

                        <?php
                                }
                            }           
                            ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="px-5 ">

                <div class="row mt-5">

                    <div class="col-md-6">

                    </div>
                    <div style="bottom:0px;box-shadow: 0 2px 4px 0 #0000001a, 0 8px 16px 0 #0000001a;"
                        class="px-5 py-3 col-md-6">
                        <p class="fs-4 fw-bold">Tổng thanh toán: </p>
                        <div class="d-flex">

                            <p>Số lượng: </p>

                            <p class="ms-2"><?php
                
                $conn = mysqli_connect('localhost','root','','cse481');
                if(!$conn){
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                // Bước 02: Thực hiện truy vấn
                $sql1 = "SELECT sum(soluong) as tong_sluong FROM giohang  WHERE MaK='$id'  ";
                $result1 = mysqli_query($conn,$sql1);
                // Bước 03: Xử lý kết quả truy vấn
                if(mysqli_num_rows($result1) > 0){
                    while($row = mysqli_fetch_assoc($result1)){
                    echo $row['tong_sluong']; 
                              
                    }
                }
                // Bước 04: Đóng kết nối Database Server
                mysqli_close($conn);
                ?>
                            </p>
                        </div>
                        <div class="d-flex">

                            <p>Tổng tiền: </p>

                            <p style="color:red" class="ms-2"><?php
                
                $conn = mysqli_connect('localhost','root','','cse481');
                if(!$conn){
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                // Bước 02: Thực hiện truy vấn
                $sql2 = "SELECT sum(giohang.soluong*sanpham.Giaban) as tongtien FROM khachhang,giohang INNER JOIN sanpham ON sanpham.MaSP = giohang.MaSP WHERE khachhang.MaK='$id' ";
                $result2 = mysqli_query($conn,$sql2);
                // Bước 03: Xử lý kết quả truy vấn
                if(mysqli_num_rows($result2) > 0){
                    while($row = mysqli_fetch_assoc($result2)){
     
                                
                    echo $row['tongtien'];
                               
                    }
                }
                // Bước 04: Đóng kết nối Database Server
                mysqli_close($conn);
                ?> VNĐ
                            </p>
                        </div>
                        <a href=""><button style="font-size:14px;color:white;"
                                class="mt-3 fw-bold col-md-12 btn btn-lg btn-block bg-danger" name="">Đặt
                                hàng</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
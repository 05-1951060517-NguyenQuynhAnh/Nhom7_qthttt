<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>NHOM7 - Đăng nhập</title>
    <link rel="shortcut icon" href="img/1.png">
</head>

<body style="font-family:'Arial'">
    <section style="background:#fffeae; height:600px">
        <div class="container p-5">
            <div class="mt-5 ms-3 row">
                <div class="ms-5 pt-5 col-md-6">
                    <p style="font-size:50px;color:#f7b400;font-family:'Arial'" class="fw-bolder mt-5 ms-5">NHOM7</p>
                    <p style="font-family:'Arial'" class="fs-3 ms-5">NHOM7 giúp bạn trở nên hoàn mỹ hơn.</p>

                </div>
                <div class="login col-md mt-5 px-4">
                    <div style="box-shadow: 0 2px 4px 0 #0000001a, 0 8px 16px 0 #0000001a;background:white;width:390px;border-radius:8px"
                        class="">
                        <form class="form-login" action="process_login.php" method="post">
                            <div class="py-3 mx-3">
                                <input class="col-md-12 ps-3 border py-2 rounded-3" type="text" name="email"
                                    placeholder="Nhập email của bạn">
                                <input class="col-md-12 ps-3 mt-3 border py-2 rounded-3" type="password" name="matkhau"
                                    placeholder="Mật khẩu">
                                <button style="color:white;background:#f7b400"
                                    class="mt-3 fw-bold col-md-12 btn btn-lg btn-block" type="submit"
                                    name="btnLogin">Đăng nhập</button>
                                <?php
                                    if(isset($_GET['error'])){
                                        echo "<p style ='color:red'>{$_GET['error']}</p>";
                                        }
                                ?>
                            
                                <hr style="height:0.45px">
                                <a class="text-decoration-none"href="signup.php">
                                    <div class="mt-4 col-md-6 py-2 fw-bold  mx-auto p-1 rounded text-center"style="font-size:14px;color:white;background:#42b72a">
                                        Tạo tài
                                            khoản mới
                                    </div>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="container">
            <div style="font-size:15px" class="row px-5">
                <div class="col-md-4  me-5">
                    <p class="fs-4 mt-5">Giới thiệu</p>
                    <p class="">NHOM7 được thành lập vào mua xuân năm
                        2022, tất cả sản phẩm của NHOM7 đều tự thiết kế và sản xuất dựa trên tiêu chí chất lượng. Xin
                        cảm ơn đã ghé thăm!</p>
                </div>
                <div class="col-md">
                    <p class="fs-4 mt-5">Thông tin liên hệ</p>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-geo-alt-fill d-inline" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        <p class="ms-2 d-inline">123 Đào Duy Anh, Q.Đống Đa, Hà Nội</p>
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-telephone-fill d-inline" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                        <p class="ms-2 d-inline">0837 473 645</p>
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-envelope d-inline" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <p class="ms-2 d-inline">nhom7@gmail.com</p>
                    </div>
                </div>
                <div class="col-md">
                    <p class="fs-4 mt-5">Thời gian mở cửa</p>
                    <p>Thứ 2 - 6: 8PM - 10PM</p>
                    <p>Thứ 7 - 8: 8PM - 9PM</p>

                </div>
            </div>

        </div>
        <p class="text-center py-3 mt-4 mb-0">Copyright © 2022 All rights reserved</p>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<?php include('../template/header.php'); 
?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM taikhoan WHERE id='$id';";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    }
?>
<body id="body-pd">
<header class="header" id="header">
        <div class="header_toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" id="header-toggle"
                class="ms-3 bi bi-list mt-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <h4 class="mt-1 text-center text-warning">Xin chào, <?php echo $row['chucvu'];?></h4>
        <div class="mt-3 d-flex py-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-people me-2"
                viewBox="0 0 16 16">
                <path
                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
            </svg>

            <p class="pt-1 dropdown-toggle" style="font-size:13px" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $row['hoten']; ?></p>

            <ul class="dropdown-menu dropdown-menu-end">
                <a href="../taikhoan/update_account.php?id=<?php echo $id?>&id1=<?php echo $id?>">
                    <li><button class="dropdown-item" type="button">Sửa tài khoản</button></li>
                </a>
                <a href="../logout.php">
                    <li><button class="dropdown-item" type="button">Log out</button></li>
                </a>
            </ul>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_logo">

                </div>

                <div class="nav_list">
                    <div class="nav_links">
                        <span class="nav_names">DASHBOARD</span>
                    </div>
                    <a href="../index.php?id=<?php echo $id ?>" class="d-flex nav_link ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-speedometer nav_icon" viewBox="0 0 16 16">
                            <path
                                d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                            <path fill-rule="evenodd"
                                d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
                        </svg>
                        <span class=" nav_name">Dashboard</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>
                    <a href="taikhoan.php?id=<?php echo $id ?>" class="d-flex nav_link  active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-person-check nav_icon" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd"
                                d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                        <span class="nav_name">Tài khoản</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>
                    <div class="nav_links">
                        <span class="nav_names">APPS</span>
                    </div>
                    <a href="../sanpham/sanpham.php?id=<?php echo $id ?>" class="d-flex nav_link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-box2-heart nav_icon" viewBox="0 0 16 16">
                            <path d="M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982Z" />
                            <path
                                d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5Zm0 1H7.5v3h-6l2.25-3ZM8.5 4V1h3.75l2.25 3h-6ZM15 5v10H1V5h14Z" />
                        </svg>
                        <span class="nav_name">Sản phẩm</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>

                    <div class="nav_links">
                        <span class="nav_names">PAGES</span>
                    </div>
                    <a href="#" class="d-flex nav_link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-journal nav_icon" viewBox="0 0 16 16">
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        </svg>
                        <span class="nav_name">Pages</span>
                        <i class="nav_icon2 bi bi-chevron-right"></i>
                    </a>
                </div>

        </nav>
    </div>

    <div class="height-100">
    <section style="background:#fffeae; height:700px">
        <div class="container p-3">
            <div class="mt-2 ms-3 row">
                <div class="login col-md-12 d-flex justify-content-center">
                    <div style="box-shadow: 0 2px 4px 0 #0000001a, 0 8px 16px 0 #0000001a;background:white;width:600px;border-radius:8px"
                        class="">
                        <p class="text-center text-warning ps-4 mt-3 fs-2 mb-0 fw-bold ">THÊM TÀI KHOẢN</p>
                        <hr>
                        <form class="form-addaccount" action="process_addaccount.php?id=<?php echo $id?>" method="post">
                            <div class="pt-1 pb-3 mx-3">
                                <input class="col-md-12 ps-3 border py-2 rounded-3" type="text" name="id"
                                    placeholder="Mã nhân viên">
                                <input class="col-md-12 mt-3 ps-3 border py-2 rounded-3" type="text" name="hovaten"
                                    placeholder="Họ và tên">
                                <input class="mt-4 ms-1" id="radio1" type="radio" value="Nữ" name="gioitinh">
                                <label for="radio1">Nữ</label>
                                <input class="ms-3 " id="radio2" type="radio" value="Nam" name="gioitinh">
                                <label for="radio2">Nam</label>
                                <input class="col-md-12 ps-3 mt-3 border py-2 rounded-3" type="date" name="ngaysinh">
                                <input class="col-md-12 ps-3 mt-3 border py-2 rounded-3" type="email" name="email"
                                    placeholder="Email">
                                <input class="col-md-12 ps-3 mt-3 border py-2 rounded-3" type="password" name="matkhau"
                                    placeholder="Mật khẩu">
                                    <div class="mt-2 ms-2">
                                    <?php
                                    if(isset($_GET['error'])){
                                        echo "<p style ='color:red'>{$_GET['error']}</p>";
                                        }
                                ?>
                                    </div>
                                <div class="mx-auto p-1  text-center">
                                    <button style="color:white;"
                                        class="mt-3 mb-2 fw-bold btn btn-lg btn-block btn-warning" type="submit"
                                        name="btnaddaccount">Thêm tài khoản</button>
                                </div>
                            </div>
                        </form>
                        <a class="text-decoration-none link-dark" style="font-size:13px"href="taikhoan.php?id=<?php echo $id ?>&id1=<?php echo $row['id']; ?>?>">
                        <div class="mb-3 ms-1">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                    width="14" height="14" fill="currentColor" class="ms-3 d-inline link-dark bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg> 
                                <p class="ms-2 d-inline">Quay lại</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
        
    </div>
    <?php include('../template/footer.php'); 
?>




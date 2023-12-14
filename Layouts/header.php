<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/bootstrap-5.3.2/dist/css/bootstrap.css">
    <script src="./public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>

    <title> KHÁCH SẠN THÀNH PHÁT</title>


    <style>
    .slick-prev {
        position: absolute;
        display: block;
        top: 40%;
        right: 0;
        z-index: 5;
        width: 35px;
        height: 35px;
        border: none;
        border-radius: 15px 0px 0px 15px;
        background: #fffdf9;
        box-shadow: 0px 1px 5px white;
    }

    .slick-next {
        position: absolute;
        display: block;
        top: 40%;
        left: 0;
        z-index: 5;
        width: 35px;
        height: 35px;
        border: none;
        border-radius: 0px 15px 15px 0px;
        background: #fffdf9;
        box-shadow: 0px 1px 5px white;
    }

    .icon-lh {
        position: fixed;
        z-index: 20;
        left: 87%;
        bottom: 100px;
    }

    .lh-th {
        width: 80px;
        height: 80px;
        background-color: #0d6efd;

        border-radius: 50%;
        padding: 5px 15px;
    }



    .icon-i {
        border-radius: 50px;
        width: 50px;
        height: 50px;

    }
    </style>

</head>

<body>

    <div class="container-menu">
        <div class="row">
            <div class="col-4">
                <div class="col-icon py-4">
                    <div class="col-5 font-icon">

                        <i class="fa-solid fa-phone" style="color: #11ccd0;"></i> 0931247957
                    </div>
                    <div class="col-1 font-icon">
                        <a href="https://www.facebook.com/thanh2923"> <i class="fa-brands fa-facebook"
                                style="color: #0b57da;"></i></a>
                    </div>
                    <div class="col-1 font-icon">
                        <i class="fa-brands fa-youtube" style="color: #f31212;"></i>
                    </div>
                    <div class="col-1 font-icon">
                        <i class="fa-brands fa-instagram" style="color: #f49106;"></i>
                    </div>
                </div>

            </div>

            <div class="col-4">
                <div class="col-icon-3 ">
                    <a class="text-decoration-none" href="index.php"><img src="images/logoks.PNG" alt=""></a>
                    <h6>THÀNH PHÁT</h6>
                </div>
            </div>
            <div class="col-1">
                <div class="mt-3">
                    <div class="row">
                        <div class="col menu-cc ps-5">
                            <button type="button" id="dropdownMenuButton1" class="" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-bars"></i>

                            </button>
                            <ul class="menu-c">
                                <li><a class="text-decoration-none" href="index.php?action=des">Điểm đến</a></li>
                                <li><a class="text-decoration-none" href="index.php?action=roms">Ưa đãi</a></li>
                                <li><a class="text-decoration-none" href="index.php?action=ctcombo">Combo</a></li>
                                <li><a class="text-decoration-none" href="index.php?action=tintuc">Tin tức</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="cha mt-3">
                    <?php  if(isset($_SESSION['email'])){
                                   extract($_SESSION['email']);
                                   $tr =' <li><i class="fa-solid fa-user"></i><a class="text-decoration-none" href="">'.$name_kh.'</a></li>';
                                   echo $tr;
                                 ?>
                    <ul class="con">
                        <?php if($role == 1) { ?>

                        <li><a class="text-decoration-none" href="./admin/index.php">Vào trang admin</a></li>


                        <?php } ?>
                        <?php if($role == 0) { ?>

                        <li><a class="text-decoration-none" href="index.php?action=ls_rom_kh">Vào trang của tôi</a>
                        </li>


                        <?php } ?>


                        <li><a class="text-decoration-none" href="index.php?action=thoat">Thoát</a></li>
                    </ul>
                </div>
                <?php } else{?>
                <li>
                    <a class="text-decoration-none" class="text-decoration-none" href="Layouts/login.php">Đăng
                        nhập</a>
                </li>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col icon-lh">
                <ul>
                    <li><a href="https://www.facebook.com/messages/t/">
                            <div class="lh-th ">
                                <img class="icon-i mt-2" src="./uploads/zalo.png" alt=""></img>
                            </div>
                        </a></li>

                </ul>
            </div>
        </div>
    </div> -->
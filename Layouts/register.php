<?php

include("../model/config.php");
include("../model/taikhoan/taikhoan.php");
   if(isset($_POST["register"]) ){
    $email = $_POST["email"];
    $pass= $_POST["pass"];
    $confimpass=$_POST['confimpass'];
    $checkemail=check_gamil($email);
    if(is_array($checkemail)){
        $_SESSION['email']=$checkemail;
        $thongbao="Email đã tồn tại !";
       
    } elseif(!kiemTraMatKhau($pass)){
        $thongbao2="Mật khẩu quá ngắn hoặc phải có ít nhất một kí tự";
    } elseif($confimpass!=$pass){
        $thongbao3="Mật khẩu không trùng nhau";
    }
    else{
        $email = $_POST["email"];
        $pass= $_POST["pass"];
    $name = $_POST["name"];
    $gioi_tinh = $_POST["gioi_tinh"];
    $phone = $_POST["phone"];
     into_user_admin($email, $pass, $name, $gioi_tinh, $phone);
       
     echo '<script>var errorMessage = "Đăng kí tài khoản thành công !";</script>';
        
    }
     
  
   
        }
        
        
        
   
  



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/bootstrap-5.3.2/dist/css/bootstrap.css">
    <script src="../public/bootstrap-5.3.2/dist/js/bootstrap.js"></script>
    <title>KHÁCH SẠN THÀNH PHÁT</title>
    <style>
    .container2 {
        width: 98%;
    }

    .col-7 img {
        width: 100%;
        height: 651px;
    }

    .col-lg {
        text-align: center;
        width: 50%;
        padding: 10px 0;
        margin: 0;
        height: 100%;
        border-bottom: 4px solid rgb(255, 174, 0);
    }

    .col-lg li {
        list-style: none;
    }

    .col-lg li a {
        text-decoration: none;
        font-weight: 500;
        font-size: 20px;
        color: rgb(28, 26, 26);

    }

    hr {
        margin: 0;
        padding: 0;
    }

    .svg {
        width: 10%;
        height: 100%;
        padding: 10px 10px;

    }

    .svg svg {
        font-size: 25px;
    }

    .input-email {
        display: flex;
        width: 100%;
        height: 40px;
        border: 1px solid darkgray;
        border-radius: 5px 5px 5px 5px;

    }

    .input-email input {
        width: 90%;
        border: none;
        appearance: none;

    }

    .input-email input[type='submit'] {
        width: 100%;
        border: none;
        appearance: none;
        color: rgb(26, 25, 25);
        font-weight: 600;
        font-size: 20px;
        background-color: #F2A900;
    }

    .col-3 a {
        text-decoration: none;
        color: rgb(39, 39, 39);
    }

    #errorNotification {
        display: none;
        position: fixed;
        top: 10%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #001524;
        color: #fff;
        padding: 20px 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    </style>
</head>

<body>

    <div class="container2 signup-form">
        <div id="errorNotification"></div>
        <div class="row">
            <div class="col-7">
                <img src="../images/logoadmin.png" alt="">
            </div>
            <div class="col-5">
                <div class="row ">
                    <div class="col">
                        <div class="col-sm text-center">
                            <a href="../index.php"><img src="../images/logoks.PNG" alt=""></a>
                            <h6>THÀNH PHÁT</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-sm text-center">
                            <a href="../index.php"><img src="../images/logoks2.PNG" alt=""></a>
                            <h6>THÀNH PHÁT</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col " style="display: flex;">
                        <ul class="col-lg">
                            <li><a href="./login.php">Đăng nhập / Login</a></li>

                        </ul>
                        <ul class="col-lg">
                            <li><a href="">Đăng kí / Register</a></li>

                        </ul>


                        <hr>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="row mt-4 email">
                        <div class="col">
                            <div class="input-email">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                    </svg>
                                </div>
                                <input required type="email " name="email" id="" placeholder="Email">
                            </div>
                            <span class="pt-4" style="color:red">
                                <?php if(isset($thongbao)) echo $thongbao;?>
                            </span>
                        </div>


                    </div>


                    <div class="row mt-4 pass">
                        <div class="col">
                            <div class="input-email">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                    </svg>
                                </div>
                                <input required type="password" name="pass" id="" placeholder="Mật khẩu / password">
                            </div>
                            <span class="pt-4" style="color:red">
                                <?php if(isset($thongbao2)) echo $thongbao2;?>
                            </span>
                        </div>


                    </div>
                    <div class="row mt-4 confimpass">
                        <div class="col">
                            <div class="input-email">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                    </svg>
                                </div>
                                <input required type="password" name="confimpass" id="" placeholder="Nhập lại pass">
                            </div>
                            <span class="pt-4 mt-3" style="color:red">
                                <?php if(isset($thongbao3)) echo $thongbao3;?>
                            </span>
                        </div>


                    </div>
                    <div class="row mt-4 name">
                        <div class="col">
                            <div class="input-email">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                    </svg>
                                </div>
                                <input required type="text" name="name" id="" placeholder="name">
                            </div>
                        </div>


                    </div>
                    <div class="row mt-4 gioi_tinh">
                        <div class="col">
                            <div class="input-email">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M176 288a112 112 0 1 0 0-224 112 112 0 1 0 0 224zM352 176c0 86.3-62.1 158.1-144 173.1V384h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H208v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V448H112c-17.7 0-32-14.3-32-32s14.3-32 32-32h32V349.1C62.1 334.1 0 262.3 0 176C0 78.8 78.8 0 176 0s176 78.8 176 176zM271.9 360.6c19.3-10.1 36.9-23.1 52.1-38.4c20 18.5 46.7 29.8 76.1 29.8c61.9 0 112-50.1 112-112s-50.1-112-112-112c-7.2 0-14.3 .7-21.1 2c-4.9-21.5-13-41.7-24-60.2C369.3 66 384.4 64 400 64c37 0 71.4 11.4 99.8 31l20.6-20.6L487 41c-6.9-6.9-8.9-17.2-5.2-26.2S494.3 0 504 0H616c13.3 0 24 10.7 24 24V136c0 9.7-5.8 18.5-14.8 22.2s-19.3 1.7-26.2-5.2l-33.4-33.4L545 140.2c19.5 28.4 31 62.7 31 99.8c0 97.2-78.8 176-176 176c-50.5 0-96-21.3-128.1-55.4z" />
                                    </svg>
                                </div>
                                <input required type="text" name="gioi_tinh" id="" placeholder="gender">
                            </div>
                        </div>


                    </div>
                    <div class="row mt-4 phone">
                        <div class="col">
                            <div class="input-email">
                                <div class="svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                    </svg>
                                </div>
                                <input required type="text" name="phone" id="" placeholder="phone">
                            </div>
                        </div>


                    </div>


                    <div class="row mt-4">
                        <div class="col">
                            <div class="input-email">
                                <input type="submit" name="register" id="" value="ĐĂNG KÝ / REGISTER">
                            </div>
                        </div>


                    </div>
                </form>

            </div>
        </div>
    </div>
    <script>
    function showErrorNotification(message) {
        var errorNotification = document.getElementById('errorNotification');
        var errorMessageElement = document.createElement('p');
        errorMessageElement.textContent = message;

        // Hiển thị hộp thoại
        errorNotification.style.display = 'block';
        errorNotification.appendChild(errorMessageElement);

        // Đặt thời gian chờ 3 giây (3000 milliseconds) để tự động tắt đi
        setTimeout(function() {

            errorNotification.style.display = 'none';
            errorNotification.removeChild(errorMessageElement);
            window.location.href = "login.php";
        }, 1000);
    }


    window.onload = function() {
        // Kiểm tra xem có thông báo lỗi không
        if (typeof errorMessage !== 'undefined') {
            showErrorNotification(errorMessage);
        }
    };
    </script>
</body>


</html>
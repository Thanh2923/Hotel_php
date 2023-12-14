<main>
    <div class="container uadai-he">
        <div class="row text-center py-5">
            <h3>ƯA ĐÃI - KHUYẾN MÃI</h3>
        </div>
        <div class="row">

            <?php  
            $per_page = 6;
            $page=!empty($_GET['page']) ? $_GET['page'] : 1;
            $offset =($page-1) * $per_page;
            $sql="select * from roms where id_menu_r=15 limit  $per_page  offset $offset ";
            $result =pdo_query($sql);
            
            $sqlr = "SELECT * FROM roms where id_menu_r= 15 ";
            // Thực thi truy vấn
            $resultr = $conn->query($sqlr);
             $totalRows = $resultr->num_rows;
            $tatal_page =ceil($totalRows / $per_page);
            
        
                   foreach ($result as $load_rom) {
                    $img_path="./uploads/";
                    extract($load_rom);
                    
// Tên sản phẩm chứa dấu +, dấu %, và khoảng trắng
// $ten_san_pham = "$name_rom";

// // Loại bỏ dấu + và dấu %
// $ten_san_phama = str_replace(['+', '%'], ' ', $ten_san_pham);

// // Thêm vào dấu - trong khoảng cách
// $phong = str_replace(' ', '-', $ten_san_phama);
                    

                    $img=$img_path.$image_rom;
                    $tr='<div class="col-4 mb-5">
                    <a class="text-decoration-none" href="index.php?action=ctdatphong&id_rom='.$id_rom.'">
                    
                    <div class="col-img">
                        <img src="'.$img.'" alt="">
                    </div>
                    <div class="name-img">
                        <h6>'.$name_rom.'</h6>
                    </div>
                    <span class="price">
                    '.number_format($price_rom, 0, ".", ".").' VNĐ
                    </span>
                  


                    </a>
        </div>
        '; echo $tr;
       }
        ?>
            <!-- <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp1.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[SA PA MỜ SƯƠNG | SA PA] Nghỉ dưỡng 2N1Đ + 01 set lẩu hương vị Tây Bắc</h6>
                </div>
                <span class="price">
                    1,500,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp2.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[VI VU HẠ LONG | HẠ LONG] Nghỉ dưỡng 2N1Đ + 02 vé xe bus 02 tầng tham quan thành phố Hạ Long
                    </h6>
                </div>
                <span class="price">
                    1,950,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp3.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[VI VU HÀ NỘI 2023] Nghỉ dưỡng 2N1Đ + 02 vé xe buýt 02 tầng</h6>
                </div>
                <span class="price">
                    1,800,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp4.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[KHÁM PHÁ HẠ LONG | HẠ LONG] Nghỉ dưỡng 2N1Đ + 02 vé xe bus 02 tầng tham quan thành phố Hạ Long
                    </h6>
                </div>
                <span class="price">
                    1,450,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp5.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[CITY OF LOVE | ĐÀ LẠT] Nghỉ dưỡng 2N1Đ + 02 vé xe bus 02 tầng tham quan thành phố Đà Lạt</h6>
                </div>
                <span class="price">
                    1,750,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp6.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[HƯƠNG RỪNG CÀ MAU | CÀ MAU] Nghỉ dưỡng 2N1Đ+ 01 bữa ăn chính + Voucher giảm giá Tour Đất
                        Mũi/KDL Hoa rừng U Minh</h6>
                </div>
                <span class="price">
                    1,500,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp7.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[ONE DAY IN HUE I HUẾ] Nghỉ dưỡng 2N1D + 02 vé xe bus 02 tầng tham quan thành phố Huế</h6>
                </div>
                <span class="price">
                    1,500,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp8.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[WINTER PROMOTION | HUẾ] Nghỉ dưỡng 2N1Đ + 01 bữa ăn chính cho 02 người lớn và 02 trẻ dưới 06
                        tuổi</h6>
                </div>
                <span class="price">
                    1,400,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp9.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[WINTER PROMOTION | LÝ SƠN] - Nghỉ dưỡng 2N1Đ + 01 chuyến xe 01 chiều đưa/đón từ cảng Lý Sơn về
                        Khách Sạn</h6>
                </div>
                <span class="price">
                    1,000,000 VNĐ
                </span>
            </div>
            <div class="col-4">
                <div class="col-img">
                    <img src="./images/dp10.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>[VI VU SÀI GÒN | SÀI GÒN] Nghỉ dưỡng 2N1Đ + 02 vé xe bus 02 tầng tham quan Sài Gòn</h6>
                </div>
                <span class="price">
                    2,300,000 VNĐ
                </span>
            </div> -->



        </div>

    </div>



    <div class="contaner">
        <div class="row my-5">

            <div class="col text-center">

                <?php if($page >1 ) {  $prev_page= $page-1;?>

                <a href="index.php?action=roms&page=<?=$prev_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-left" style="color: #ffbb00;"></i></a>

                <?php }?>
                <?php for ($num=1 ; $num <= $tatal_page ; $num++) { 
        
        ?>
                <?php if($page != $num) {?>
                <?php if($num > $page - 3 && $num < $page +3 ) {?>
                <a href="index.php?action=roms&page=<?=$num?>" class="btn btn-light"><?=$num?></a>
                <?php }?>
                <?php } else {?>
                <strong class="btn btn-warning"><?=$num?></strong>
                <?php }?>

                <?php }?>
                <?php if($page < $totalRows-9 ) {  $next_page= $page+1;?>

                <a href="index.php?action=roms$page=<?=$next_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-right" style="color: #ffbb00;"></i></a>

                <?php }?>
            </div>

        </div>
    </div>


</main>
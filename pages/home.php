<?php  if(isset($_GET['action'])){
                  
                  ?>
<?php } else{?>
<li>
    <div class="containxer-xl ps4">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="images/banne1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">


                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/banne2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">


                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/banne3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">


                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container ps4-c">
            <form action="?action=timkiem" method="post">
                <div class="row py-4">
                    <div class="col-3">
                        <h6>Bạn muốn nghỉ dưỡng ở đâu?</h6>
                        <div class="input-group mb-3">
                            <select class="form-select" name="id_des" aria-label="Default select example">
                                <?php
                 $load_all_des=load_all_des();
                foreach ( $load_all_des as $hello) {
                    extract($hello);
                    $tr='<option value="'.$id_des.'">'.$name_des.'</option>';
                    echo $tr;
                }   
            
                ?> </select>

                        </div>

                    </div>
                    <div class="col-3">
                        <h6>Ngày nhận - trả phòng</h6>
                        <div class="input-group mb-3">
                            <?php
                         $ngaynhann = isset($_POST['ngaynhan']) ? $_POST['ngaynhan'] : date('Y-m-d');
                         $ngaytraa = isset($_POST['ngaytra']) ? $_POST['ngaytra'] : date('Y-m-d', strtotime('+1 day'));
                        
                         ?>
                            <input type="date" value="<?php echo $ngaynhann ;?>" name="ngaynhann" class="form-control">
                            <input type="date" value="<?php echo $ngaytraa ;?>" name="ngaytraa" class="form-control">


                        </div>
                    </div>
                    <div class="col-2">
                        <h6>Số Phòng</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Số phòng">

                        </div>

                    </div>
                    <div class="col-2">
                        <h6>Mã khuyến Voucher</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                        </div>
                    </div>
                    <div class="col-2">
                        <h6 style="width: 100%; height: 15px;"></h6>
                        <button type="submit" name="timkiem" class="btn btn-warning">Tìm kiếm</button>
                        <script>

                        </script>
                    </div>

                </div>
            </form>

        </div>
    </div>
</li>
<?php } ?>
<main>
    <div class="container dbcl-he">
        <div class="row ">
            <div class="col py-5 dbcl">
                <img src="./images/dbcl.PNG" alt="">
                <h6>Đảm bảo giá tốt nhất</h6>
            </div>
            <div class="col py-5 dbcl">
                <img src="./images/dbcl2.PNG" alt="">
                <h6>Đa dạng điểm đến lựa chọn tốt nhất</h6>
            </div>
            <div class="col py-5 dbcl">
                <img src="./images/dbcl3.PNG" alt="">
                <h6>Đảm bảo chất lượng phục vụ tốt nhất</h6>
            </div>
            <div class="col py-5 dbcl">
                <img src="./images/dbcl4.PNG" alt="">
                <h6>Hỗ trợ khách hàng nhanh nhất</h6>
            </div>
        </div>
    </div>
    <div class="container uadai-he">
        <div class="row text-center py-5">
            <h3>ƯA ĐÃI DÀNH CHO BẠN</h3>
        </div>


        <div class="row row3">
            <?php  
                   $sql= "Select * from roms where id_menu_r=15 order by id_rom desc";
                   $result= pdo_query( $sql );
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
                    $tr='    <a class="text-decoration-none" href="index.php?action=ctdatphong&id_rom='.$id_rom.'"><div class="col">
                    
                    <div class="col-img">
                        <img src="'.$img.'" alt="">
                    </div>
                    <div class="name-img">
                        <h6>'.$name_rom.'</h6>
                    </div>
                    <span class="price">
                    '.number_format($price_rom, 0, ".", ".").' VNĐ
                    </span>
                  



        </div>
        </a> '; echo $tr;
        }
        ?>
            <!-- <div class="col">
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
            <div class="col">
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
            <div class="col">
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
            <div class="col">
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
            <div class="col">
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
            <div class="col">
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
            </div> -->


        </div>
        <div class="container text-center">
            <div class="row my-5">
                <div class="col">
                    <a class="text-decoration-none" href="index.php?action=roms"> <button type="submit" id="xemthem">Xem
                            thêm <i class="fa-solid fa-arrow-right" style="color: #ec9909;"></i></button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container combo-p">
        <div class="row text-center py-5">
            <h3>COMBO GIÁ TỐT</h3>
        </div>
        <div class="row ">
            <?php
         $sql= "Select * from roms where id_menu_r=16 ORDER BY id_rom desc ";
         $result= pdo_query( $sql );
         foreach ($result as $load_rom) {
          $img_path="./uploads/";
          extract($load_rom);
          $img=$img_path.$image_rom;
          $tr ='<div class="col">   <a class="text-decoration-none" href="index.php?action=ctdatphong&id_rom='.$id_rom.'">
          <div class="col-img">
              <img src="'.$img.'" alt="">
          </div>
          <div class="name-img">
              <h6>'.$name_rom.'</h6>
          </div>
          <span class="price">
          '.number_format($price_rom, 0, ".", ".").' VNĐ
          </span>
     </a> </div>'; echo $tr;
        }
        ?>
            <!-- <div class="col">
                <div class="col-img">
                    <img src="./images/cb1.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>Combo nghỉ dưỡng 4N3Đ tại Đà Nẵng - Hội An (2 Đêm tại Đà Nẵng + 1 Đêm tại Hội An)</h6>
                </div>
                <span class="price">
                    4,200,000 VNĐ
                </span>
            </div>
            <div class="col">
                <div class="col-img">
                    <img src="./images/cb2.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>Combo nghỉ dưỡng 4N3Đ tại Đà Nẵng - Hội An (1 Đêm tại Đà Nẵng + 2 Đêm tại Hội An)</h6>
                </div>
                <span class="price">
                    4,200,000 VNĐ
                </span>
            </div>
            <div class="col">
                <div class="col-img">
                    <img src="./images/cb3.jpg" alt="">
                </div>
                <div class="name-img">
                    <h6>Combo nghỉ dưỡng 3N2Đ tại Đà Nẵng - Hội An</h6>
                </div>
                <span class="price">
                    3,200,000 VNĐ
                </span>
            </div> -->

        </div>
        <div class="container text-center">
            <div class="row my-5">
                <div class="col">
                    <a href="index.php?action=ctcombo"><button type="submit" id="xemthem">Xem thêm <i
                                class="fa-solid fa-arrow-right" style="color: #ec9909;"></i></button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container dd-nbat">
        <div class="row text-center py-5">
            <h3>ĐIỂM ĐẾN NỔI BẬT</h3>
        </div>
        <div class="row">
            <?php  
                $load_dd=load_six_des();
                $path_img="./uploads/";

                foreach ($load_dd as $dd) {
                    extract($dd);
                    $img=$path_img . $image_des;
                    $tr='<div class="col-4 img-des pb-3 space">
                    <img src="'.$img.'" style="width:100%; height:250px" alt="">
                    <div class="tidel-des">
                    <h3> <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> '.$name_des.'</h3>
                </div>
                </div>';echo $tr;
                }

               
               ?>
            <div class="container text-center">
                <div class="row my-5">
                    <div class="col">
                        <a href="index.php?action=des"><button type="submit" id="xemthem">Xem thêm <i
                                    class="fa-solid fa-arrow-right" style="color: #ec9909;"></i></button></a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-4 img-des space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
                <div class="tidel-des">

                    <h3> <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Hồ Chính Minh</h3>
                </div>
            </div>
            <div class="col-4  space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
            </div>
            <div class="col-4  space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
            </div> -->

        </div>
    </div>
    <div class="dvi" style="width:100%; height:50px;"></div>
</main>
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
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

                        <label for="inputPassword5" class="form-label pt-2">Điểm đến:</label> <select
                            class="form-select" name="id_des" aria-label="Default select example">
                            <?php

                 $load_all_dess=load_all_des();
                     foreach ($load_all_dess as $load_des) {
                        extract($load_des);
                        $tr='<option value="'.$id_des.'">'.$name_des.'</option>';
                        echo $tr;
                     }
                   
                  
                
                ?>
                        </select>

                    </div>

                </div>
                <div class="col-3">
                    <h6>Ngày nhận - trả phòng</h6>
                    <div class="input-group mb-3">

                        <input type="date" value="" name="ngaynhann" class="form-control">
                        <input type="date" value="" name="ngaytraa" class="form-control">


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
<main>
    <div class="container">
        <div class="row text-center py-5">
            <h3>TIN TỨC DU LỊCH</h3>
        </div>
        <div class="row">
            <?php
          $sql="select * from news order by id_news desc";
          $load_tt=pdo_query_one($sql); 
          $img_path="./uploads/";
          extract($load_tt);
          $img=$img_path.$image_news;
             echo '<div class="col-6 " >
             <a class="text-decoration-none black-text" href="index.php?action=ct_tintuc&id_news='.$id_news.'">
             <div class="row ttnb ">
                 <div class="col-12">
                     <img src="'.$img.'" style="width:100%;height:400px" alt="">
                 </div>
                 <div class="col-12 tt my-3">
                     <p>'.$date.' - '.$date.'</p>
                 </div>
                 <div class="col-12 tt ">
                     <h5>'.$title.'</h5>
                 </div>
                 <div class="col-12 tt ">
                     <p>'.$title_sub.'</p>
                 </div>
             </div> </a>
         </div> ';
          ?>

            <div class="col-6">
                <?php
                $per_page=4;
                $offset=0;
          $sql="select * from news order by id_news desc limit $per_page offset $offset ";
          $load_tt=pdo_query($sql); 
          foreach ($load_tt as $load) {
            $img_path="./uploads/";
            extract($load);
            $img=$img_path.$image_news;
            echo ' <a class="text-decoration-none " href="index.php?action=ct_tintuc&id_news='.$id_news.'"> <div class="row 1 ttnb mb-3">
           
            <div class="col-5">
                <img src="'.$img.'" style="width:100%; height:150px" alt="">
            </div>
            <div class="col-7"> 
                <div class="row">
                    <div class="col-12 tt" >
                        <p>'.$date.' - '.$date.'</p>
                    </div>
                    <div class="col-12 tt">
                        <h6>'.$title.'</h6>
                    </div>
                </div>
            </div> 
        </div></a>  ';
          }
         
          ?>
                <!-- <div class="row 1 mb-3">
                    <div class="col-5">
                        <img src="./images/acxxxx.jpg" style="width:100%; height:150px" alt="">
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-12">
                                <p>30-09-2023 - 30-09-2023</p>
                            </div>
                            <div class="col-12">
                                <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row 2 mb-3">
                    <div class="col-5">
                        <img src="./images/acxxxx.jpg" style="width:100%; height:150px" alt="">
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-12">
                                <p>30-09-2023 - 30-09-2023</p>
                            </div>
                            <div class="col-12">
                                <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row 3 mb-3">
                    <div class="col-5">
                        <img src="./images/acxxxx.jpg" style="width:100%; height:150px" alt="">
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-12">
                                <p>30-09-2023 - 30-09-2023</p>
                            </div>
                            <div class="col-12">
                                <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row 4">
                    <div class="col-5">
                        <img src="./images/acxxxx.jpg" style="width:100%; height:150px" alt="">
                    </div>
                    <div class="col-7">
                        <div class="row">
                            <div class="col-12">
                                <p>30-09-2023 - 30-09-2023</p>
                            </div>
                            <div class="col-12">
                                <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="row my-5">

            <?php
                $per_page=4;
                $offset=4;
          $sql="select * from news order by id_news desc limit $per_page offset $offset ";
          $load_tt=pdo_query($sql); 
          foreach ($load_tt as $load) {
            $img_path="./uploads/";
            extract($load);
            $img=$img_path.$image_news;
            echo ' <div class="col-3 icon-link-hover"">
            <a class="text-decoration-none black-text" href="index.php?action=ct_tintuc&id_news='.$id_news.'"> <div class="row ttnb">
                <div class="col-12">
                    <img src="'.$img.'" style="width: 100%; height:150px" alt="">
                </div>
                <div class="col-12 tt">
                    <p>'.$date.' - '.$date.' </p>
                </div>
                <div class="col-12 tt">
                    <h6>'.$title.'</h6>
                </div>
            </div></a>
        </div>';
          }
         
          ?>
            <!-- <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        <img src="./images/banne1.jpg" style="width: 100%; height:150px" alt="">
                    </div>
                    <div class="col-12">
                        <p>20-1003-2003 - 20-1003-2003 </p>
                    </div>
                    <div class="col-12">
                        <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        <img src="./images/banne1.jpg" style="width: 100%; height:150px" alt="">
                    </div>
                    <div class="col-12">
                        <p>20-1003-2003 - 20-1003-2003 </p>
                    </div>
                    <div class="col-12">
                        <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        <img src="./images/banne1.jpg" style="width: 100%; height:150px" alt="">
                    </div>
                    <div class="col-12">
                        <p>20-1003-2003 - 20-1003-2003 </p>
                    </div>
                    <div class="col-12">
                        <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-12">
                        <img src="./images/banne1.jpg" style="width: 100%; height:150px" alt="">
                    </div>
                    <div class="col-12">
                        <p>20-1003-2003 - 20-1003-2003 </p>
                    </div>
                    <div class="col-12">
                        <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</main>
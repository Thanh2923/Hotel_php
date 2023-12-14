<?php
 $ngaynhann = isset($_POST['ngaynhan']) ? $_POST['ngaynhan'] : date('Y-m-d');
 $ngaytraa = isset($_POST['ngaytra']) ? $_POST['ngaytra'] : date('Y-m-d', strtotime('+1 day'));
 
  if(isset($_SESSION['email'])){

    if(isset($_POST['datphong'])){
      
        $id_rom=$_POST['id_rom'];
        $ngaynhann=$_POST['ngaynhan'];
        $ngaytraa=$_POST['ngaytra']; 
        $date_ht = date("Y-m-d");
        $startDate = new DateTime($ngaynhann);
$endDate = new DateTime($ngaytraa);
   // Tính số ngày giữa hai ngày
    $bookingDays = $startDate->diff($endDate)->days;
        $checkdate=check_date($id_rom);
        if(is_array($checkdate)){
            extract($checkdate);
           }
      
        if($ngaynhann < $date_ht || $ngaytraa < $date_ht){
            echo '<script>var errorMessage = "Ngày đã qua , vui lòng nhập lại ngày !";</script';


     }elseif($ngaynhann > $ngaytraa){
        echo '<script>var errorMessage = "Ngày nhận lớn hơn ngày trả !";</script';
       
      
     }elseif($ngaynhann == $date_get || $ngaytraa == $date_pay){
        echo '<script>var errorMessage = "Ngày đã có người đặt phòng !";</script';
      
     }
else{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
$time_ht = date("H:i:s");
       $status=$_POST['status'];
        $ngaynhann=$_POST['ngaynhan'];
        $ngaytraa=$_POST['ngaytra']; 
          $ma_rom=$_POST['ma_rom'];
                $id_rom=$_POST['id_rom'];
                $kieuphong=$_POST['kieuphong'];
                $name_des=$_POST['name_des'];
                $name_menu=$_POST['name_menu'];
                $soluong=$_POST['sophong'];
                $ma_rom=$_POST['ma_rom'];
                $price=$_POST['price'];
                $name_rom=$_POST['name_rom'];
                $sum = $price * $soluong * $bookingDays ;
                $name_kh=$_SESSION['email']['name_kh'];
                $email=$_SESSION['email']['email'];
                $gender=$_SESSION['email']['gender'];
                $phone=$_SESSION['email']['phone'];
                $name_des = $_POST['name_des'];
                $name_menu = $_POST['name_menu'];
                $quantity = $_POST['sophong'];
                 $price = $_POST['price'];
                 $id_des=$_POST['id_des'];
                 $id_menu_b=$_POST['id_menu_b'];
                $sql="insert into book_rom(ma_rom,price,quantity,name_rom,name_kh,email,phone,gender,date_get,date_pay,type_rom,name_des,name_menu,sum,id_rom_t,status,id_menu_b,number_date,id_des_r,time_dp) values('$ma_rom','$price','$quantity','$name_rom','$name_kh','$email','$phone','$gender','$ngaynhann','$ngaytraa','$kieuphong','$name_des','$name_menu','$sum','$id_rom','$status','$id_menu_b',' $bookingDays','$id_des','$time_ht')";
                pdo_execute($sql);
                header('location: index.php?action=thanhtoan');
       
}

    }
  }
  else{
    if(isset($_POST['datphong'])){
       
        $id_rom=$_POST['id_rom'];
        $ngaynhann=$_POST['ngaynhan'];
        $ngaytraa=$_POST['ngaytra']; 
        $date_ht = date("Y-m-d");
        $startDate = new DateTime($ngaynhann);
$endDate = new DateTime($ngaytraa);
   // Tính số ngày giữa hai ngày
    $bookingDays = $startDate->diff($endDate)->days;
        $checkdate=check_date($id_rom);
        if(is_array($checkdate)){
            extract($checkdate);
           }
      
        if($ngaynhann < $date_ht || $ngaytraa < $date_ht){
            echo '<script>var errorMessage = "Ngày đã qua , vui lòng nhập lại ngày !";</script';


     }elseif($ngaynhann > $ngaytraa){
        echo '<script>var errorMessage = "Ngày nhận lớn hơn ngày trả !";</script';
       
      
     }elseif($ngaynhann == $date_get || $ngaytraa == $date_pay){
        echo '<script>var errorMessage = "Ngày đã có người đặt phòng !";</script';
      
     }
else{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $time_ht = date("H:i:s");   
       $status=$_POST['status'];
        $ngaynhann=$_POST['ngaynhan'];
        $ngaytraa=$_POST['ngaytra']; 
          $ma_rom=$_POST['ma_rom'];
                $id_rom=$_POST['id_rom'];
                $kieuphong=$_POST['kieuphong'];
                $name_des=$_POST['name_des'];
                $name_menu=$_POST['name_menu'];
                $soluong=$_POST['sophong'];
                $ma_rom=$_POST['ma_rom'];
                $price=$_POST['price'];
                $name_rom=$_POST['name_rom'];
                $sum = $price * $soluong * $bookingDays ;
                $name_des = $_POST['name_des'];
                $name_menu = $_POST['name_menu'];
                $quantity = $_POST['sophong'];
                 $price = $_POST['price'];
                 $id_des=$_POST['id_des'];
                 $id_menu_b=$_POST['id_menu_b'];
                $sql="insert into book_rom(ma_rom,price,quantity,name_rom,date_get,date_pay,type_rom,name_des,name_menu,sum,id_rom_t,status,id_menu_b,number_date,id_des_r,time_dp) values('$ma_rom','$price','$quantity','$name_rom','$ngaynhann','$ngaytraa','$kieuphong','$name_des','$name_menu','$sum','$id_rom','$status','$id_menu_b',' $bookingDays','$id_des','$time_ht')";
                pdo_execute($sql);
                $link="index.php?action=thanhtoan"."&ngay_nhan=".urlencode($ngaynhann)."&ngay_tra=".urlencode($ngaytraa)."&id_rom=".urlencode($id_rom);
 
                header('location:'.$link);
       
}

    }
   
   
  }
 
        
 


  
?>

<div class="height-heder">

</div>

<main style="background-color: #f8f9fa;; width:100%; ">
    <div style="width:100%; height:20px">

    </div>

    <form action="" method="post">
        <div class="container" style="background-color:white;">
            <?php 
            $img_path="./uploads/";
        $load_type_don=load_one_tpye_don();
        extract($load_type_don);
        $img_d=$img_path.$img_type;
        $load_phong= load_one_rom($id_rom);
        extract($load_phong);
        $img=$img_path.$image_rom;
        $load_type_doi=load_one_tpye_doi();
        extract($load_type_doi);
        $img_d_d=$img_path.$img_type;

        $tr ='            <div class="row pt-3 ctp">
        <div class="col-7 img-ct ">
            <img src="'.$img.'" alt="">
            <div class="row my-3">
            <div class="col-6">
            <img src="'.$img_d.'" style="width:100%;height:150px" alt="">
            </div> 
            <div class="col-6">
            <img src="'.$img_d_d.'" style="width:90%;height:150px" alt="">
            </div> 
            </div> 
        </div>
        <div class="col-5">
            <div class="col-12 pt-1">
                <h4>'.$name_rom.'</h4>
                <input type="hidden" name="name_rom" value="'.$name_rom.'">
            </div>
            <div class="col-12 py-5 price-ctp">
                <p>Chỉ từ <span>'.number_format($price_rom, 0, ".", ".").' VNĐ</span> /phòng/ đêm</p>
                <input type="hidden" name="price" value="'.$price_rom.'">
        </div>
        <div class="col-12 pt-5 text-center">
            <i class="fa-solid fa-phone"></i> Hotline
            <b><a class="text-decoration-none" href="">+84 0931247957</a></b>
        </div>
        </div>
        <input type="hidden" name="ma_rom" value="'.$ma_rom.'">
        <input type="hidden" name="id_rom" value="'.$id_rom.'">
        
        <input type="hidden" name="status" value="Đang xử lý">
        </div>' 
        ; echo $tr;

        ?>
            <!-- <div class="row pt-3 ctp">
            <div class="col-7 img-ct ">
                <img src="./images/dp1.jpg" alt="">
            </div>
            <div class="col-5">
                <div class="col-12 pt-1">
                    <h3>Combo nghỉ dưỡng 4N3Đ tại Đà Nẵng - Hội An (2 Đêm tại Đà Nẵng + 1 Đêm tại Hội An)</h3>
                </div>
                <div class="col-12 py-5 price-ctp">
                    <p>Chỉ từ <span><span>1.5</span>00.000 VNĐ</span> /phòng/ đêm</p>
                    <input type="hidden" name="price" value="?>">
                </div>
                <div class="col-12 pt-5 text-center">
                    <i class="fa-solid fa-phone"></i> Hotline
                    <b><a href="">+84 931247957</a></b>
                </div>
            </div>
        </div> -->
            <hr>


            <div class="row my-5 tiledd">
                <div class="col-4 tmle-3" style="padding: 0;">
                    <button type="button" class="btn btn-warning">
                        <b style="color:white">1</b> CHỌN SỐ PHÒNG - NGÀY ĐI
                    </button>
                </div>
                <div class="col-4 tmle-3" style="padding: 0;">
                    <button type="button" style="background-color: #8f8e8e;color: white;" class="btn btn-light btn-3">
                        <b style="color:orange">2</b> THÔNG TIN ƯA ĐÃI
                    </button>
                </div>
                <div class="col-4 tmle-3" style="padding: 0;">
                    <button type="button" style="background-color: #8f8e8e; color: white;" class="btn btn-light btn-3">
                        <b style="color:orange">3</b> ĐẶT PHÒNG
                    </button>
                </div>
            </div>
            <div class="row my-5 thongtin">
                <div class="col-4">
                    <label for="checkin" class="form-label">Ngày nhận phòng:</label>
                    <input class="form-control" type="date" id="checkin" name="ngaynhan"
                        value="<?php echo $ngaynhann ;?>" required>

                </div>
                <div class="col-4">
                    <label for="checkout" class="form-label">Ngày trả phòng:</label>
                    <input type="date" class="form-control" id="checkout" name="ngaytra"
                        value="<?php echo $ngaytraa ;?>" required>

                </div>
                <div class="col-4">
                    <label for="inputPassword5" class="form-label">Số phòng:</label>
                    <select class="form-select" name="sophong" aria-label="Default select example">
                        <option value="1">1 Phòng</option>
                        <option value="2">2 Phòng</option>
                        <option value="3">3 Phòng</option>
                        <option value="4">4 Phòng</option>
                        <option value="5">5 Phòng</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="inputPassword5" class="form-label pt-2">Kiểu phòng:</label>
                    <select class="form-select" name="kieuphong" aria-label="Default select example">
                        <?php 
                    $load_type=load_all_tpye();
                    foreach ($load_type as $load) {
                        extract($load);
                        $tr='<option value="'.$name_type.'">'.$name_type.'</option>'; echo $tr;
                    }  
                    
                    ?>
                    </select>
                </div>
                <div class="col-4">
                    <label for="inputPassword5" class="form-label pt-2">Điểm đến:</label> <select class="form-select"
                        name="name_des" aria-label="Default select example">
                        <?php
                 $load_all_dess=load_des_ctphong($id_rom);
                 
               
                    extract($load_all_dess);
                    $tr='<option value="'.$name_des.'">'.$name_des.'</option>';
                    echo $tr;
                  
                
                ?> </select>
                    <?php
                 $load_all_dess=load_des_ctphong($id_rom);
              
                    extract($load_all_dess);
                    echo '<input type="hidden" value="'.$id_des.'" name="id_des">';
                ?>


                </div>
                <div class="col-4">
                    <label for="inputPassword5" class="form-label pt-2">Danh mục:</label> <select class="form-select"
                        name="name_menu" aria-label="Default select example">
                        <?php
                 $load_dm_ctphong=load_dm_ctphong($id_rom);
                
               
                    extract($load_dm_ctphong);
                    $tr='<option value="'.$name_menu.'">'.$name_menu.'</option>';
                    echo $tr;
                  
            
                ?> </select>
                    <input type="hidden" name="id_menu_b" value="<?=$id_menu?>">

                </div>




            </div>
            <div class="row pb-5 tieptuct">
                <div class="col"></div>
                <div class="col tieptuc">
                    <input type="submit" name="datphong" value="Tiếp tục" class="btn btn-warning">
                </div>
                <div class="col"></div>

            </div>
        </div>

    </form>

    <div id="errorNotification"></div>
    <script>


    </script>
</main>
<div style="width:100%;height:50px">

</div>
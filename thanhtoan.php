<?php 

if(isset($_SESSION['email'])){
    extract($_SESSION['email']);
    $sql= "select * from book_rom where email='$email' order by id_book_rom desc ";
    $resul= pdo_query_one($sql);
    extract($resul);
    
}


?>

<div class="container">
    <form action="" method="post">
        <div class="row">

            <?php  if(isset($_SESSION['email'])){
        
         $tr ='  <div class="col-7 my-3 bg-warning-subtle ">
         <div class="invoice-container py-4">
             <h2>Hóa đơn</h2>
         </div>
         <div class="row ">
             <div class="col-5">
                 <h5>Thông tin khách hàng</h5>
                 <p><strong class="thd-4">Tên Khách Hàng:</strong> '.$name_kh.'</p>
                 <p><strong class="thd-4">Email:</strong> '.$email.'</p>
                 <p><strong class="thd-4">Điện Thoại:</strong> '.$phone.'</p>
                 <p><strong class="thd-4">Giới Tính:</strong> '.$gender.'</p>
             </div>
             <div class="col-7">
                 <h5>Thông tin đặt phòng</h5>
                 <p><strong class="thd-4">Mã hóa đơn :</strong>'.$id_book_rom.'</p>
                 <p><strong class="thd-4">Tên phòng :</strong> '.$name_rom.'</p>
                 <p><strong class="thd-4">Giá :</strong>  '.number_format($price, 0, ".", ".").' VNĐ</p>
                 <p><strong class="thd-4">Số Lượng :</strong> '.$quantity.'</p>
                 <p><strong class="thd-4">Ngày Nhận-Trả phòng :</strong> '.$date_get.'- '.$date_pay.'</p>
                 <p><strong class="thd-4">Số ngày :</strong> '.$number_date.'</p>
                 <p><strong class="thd-4">Loại Phòng :</strong> '.$type_rom.'</p>
                 <p><strong class="thd-4">Mã Phòng :</strong>'.$ma_rom.'</p>
                 <p><strong class="thd-4">Tên Địa Điểm:</strong> '.$name_des.'</p>
                 <p><strong class="thd-4">Tổng Tiền:</strong> <span style="    color: orange;
                 font-weight: 800;">'.number_format($sum, 0, ".", ".").'</span> VNĐ</p>
             </div>
         </div>

     </div>   
     
    
   
     
     ';  echo $tr;} else{
        $sql= "select * from book_rom order by id_book_rom desc ";
    $resul= pdo_query_one($sql);
    extract($resul);
       
       ?>

            <div class="col-7 my-3 bg-warning-subtle ">
                <div class="invoice-container py-4">
                    <h2>Thông tin khách hàng</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="inputPassword5" class="form-label">Tên khách hàng:</label>
                        <input type="text" id="inputPassword5" name="name_kh" class="form-control"
                            aria-describedby="passwordHelpBlock" placeholder="Nhập họ và tên ...">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword5" class="form-label">Email:</label>
                        <input type="text" id="inputPassword5" name="email" class="form-control"
                            aria-describedby="passwordHelpBlock" placeholder="Nhập email ...">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword5" class="form-label">Phone:</label>
                        <input type="text" id="inputPassword5" name="phone" class="form-control"
                            aria-describedby="passwordHelpBlock" placeholder="Nhập số điện thoại ...">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword5" class="form-label">Giới tính:</label>
                        <select name="gender" class="form-control" id="">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </div>
                    <input type="hidden" name="id_book_rom" value="<?=$id_book_rom?>">
                </div>
            </div>

            <?php }?>
            <!-- <div class="col-7 my-3 bg-warning-subtle ">
            <div class="invoice-container py-4">
                <h2>Hóa đơn</h2>
            </div>
            <div class="row ">
                <div class="col-5">
                    <h5>Thông tin khách hàng</h5>
                    <p><strong class="thd-4">Tên Khách Hàng:</strong> Nguyễn Văn A</p>
                    <p><strong class="thd-4">Email:</strong> nguyenvana@example.com</p>
                    <p><strong class="thd-4">Điện Thoại:</strong> 0123456789</p>
                    <p><strong class="thd-4">Giới Tính:</strong> Nam</p>
                </div>
                <div class="col-7">
                    <h5>Thông tin đặt phòng</h5>
                    <p><strong class="thd-4">Mã hóa đơn :</strong></p>
                    <p><strong class="thd-4">Tên Phòng:</strong> Phòng A</p>
                    <p><strong class="thd-4">Giá:</strong> 100.00</p>
                    <p><strong class="thd-4">Số Lượng:</strong> 2</p>
                    <p><strong class="thd-4">Ngày Nhận-Trả phòng:</strong> 2023-01-01</p>
                    <p><strong class="thd-4">Loại Phòng:</strong> Phòng Đôi</p>
                    <p><strong class="thd-4">Mã Phòng:</strong> ABC123</p>
                    <p><strong class="thd-4">Tên Địa Điểm:</strong> Khu Resort XYZ</p>
                    <p><strong class="thd-4">Tổng Tiền:</strong> 300.00</p>
                </div>
            </div>

        </div> -->
            <!-- <div class="col-5 my-3">
            <div class="invoice-container py-4">
                <h2>Thanh toán</h2>
            </div>
            <div class="row">
                <div class="col-12  text-center">
                    <img src="./images/qr.png" style="width:50%; height:200px;margin:auto" alt="">
                </div>
                <div class="col-7 my-3 m-auto">
                    <p><strong>Chủ tài khoản :</strong> Nguyễn Văn Thành</p>
                    <p><strong>Số tài khoản :</strong> 00000000</p>
                    <p> <strong>Tên ngân hàng :</strong> TPbank</p>
                </div>
            </div>
            <div class="row m-auto thtt">
                <input type="submit" name="thtt" value="Thực hiện thanh toán" class="btn btn-warning">
            </div>

        </div> -->

            <?php
        
        $sql= "select * from pay where id_pay ";
        $resul= pdo_query_one($sql);
        $img_path='./uploads/';
        extract($resul);
        $img=$img_path.$image_banking;
        $img_momo=$img_path.$image_momo;

        $tr='  <div class="col-5 my-3">
        <div class="invoice-container py-4">
            <h2>Thanh toán</h2>
        </div>
        <div class="row " id="signupForm" style="display:block">
            <div class="col-12  text-center">
                <img src="'.$img.'" style="width:50%; height:200px;margin:auto" alt=""> 
            </div>
            <div class="col-8 my-3 m-auto">
                <p><strong>Chủ tài khoản :</strong> '.$name_tk.'</p>
                <p><strong>Số tài khoản :</strong> '.$stk.'</p>
                <p> <strong>Tên ngân hàng :</strong> '.$name_nh.'</p>
                <p> <strong>Nội dung:</strong> Tên + sdt đã đặt phòng</p>
            <span class="p-2" style="background-color: yellow;
            color: #354618;">Ví dụ: Thành 0931247957</span>
            </div>
        </div>
        <div class="row " id="login-form" style="display:none">
        <div class="col-12  text-center">
            <img src="'.$img_momo.'" style="width:50%; height:200px;margin:auto" alt=""> 
        </div>
        <div class="col-8 my-3 m-auto">
            <p><strong>Chủ tài khoản :</strong> '.$name_tk.'</p>
            <p><strong>Số điện thoại :</strong> '.$phone.' </p>
            <p> <strong>Nội dung:</strong> Tên + sdt đã đặt phòng</p>
            <span class="p-2" style="background-color: yellow;
            color: #354618;">Ví dụ: Thành 0931247957</span>
            
           
        </div>
    </div>

        <div class="col-12 my-3">
        <select id="mySelect" class="form-select" name="mySelect">
        <option value="tpbank">Tpbank bankking</option>
        <option value="momo">Ví điện tử Momo</option>
      </select>
       
    </div>
        '; echo $tr;
        
        ?>

            <?php if(isset($_SESSION['email'])) {?>
            <div class="row m-auto thtt">
                <input type="submit" name="thtt" value="Thực hiện thanh toán" class="btn btn-warning">
            </div>
            <?php } else{?>
            <div class="row m-auto thtt">
                <input type="submit" name="thtt_out" value="Thực hiện thanh toán" class="btn btn-warning">
            </div>

            <?php }?>
        </div>
    </form>
</div>
<hr>
<script>
document.getElementById('mySelect').addEventListener('change', function() {
    var selectedOption = this.value;
    var elementToToggle = document.getElementById('login-form');
    var elementToToggleaaa = document.getElementById('signupForm');

    // Ẩn tất cả các phần tử
    elementToToggle.style.display = 'none';
    elementToToggleaaa.style.display = 'block';

    // Hiển thị phần tử tương ứng với tùy chọn được chọn
    if (selectedOption === 'momo') {
        elementToToggle.style.display = 'block';
        elementToToggleaaa.style.display = 'none';
    } else {
        elementToToggle.style.display = 'none';
        elementToToggleaaa.style.display = 'block';
    }



});
</script>
</div>
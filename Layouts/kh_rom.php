<?php 

if(isset($_SESSION['email'])){
    extract($_SESSION['email']);
    $email=$_SESSION['email']['email'];}
?>
<div class="container">
    <div class="row ">
        <div class="col text-center">
            <p>Để hủy phòng vui lòng liên hệ hotline 0931247957</p>
        </div>
    </div>
    <div class="row my-5 tilde-kh text-center">

        <div class="col-6 ">
            <a href="" class="text-decoration-none" onclick="ls_kh()">
                <h3>Thông tin khách hàng</h3>
            </a>
        </div>

        <div class="col-6 ">
            <a href="" class="text-decoration-none" onclick="ls_kh()">
                <h3>Lịch sử đặt phòng</h3>
            </a>
        </div>

    </div>
    <div class="row mb-5">
        <div class="col-12 tt-kh" style="display:block">
            <table>
                <thead>
                    <tr>
                        <th>Họ và tên</th>
                        <th>Email</th>
                        <th>Pass</th>
                        <th>Số điện thoại</th>
                        <th>Giới tính</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                    $load_user=load_user_email($email);
            
                extract($load_user);
                $suaid_user="index.php?action=suaid_user&id_user=".$id_user;
                $tr = ' <tr style="border-bottom: 1px solid orangered">
                <td>'.$name_kh.'</td>
                <td>'.$email.'</td>
                <td>'.$pass.'</td>
                <td>'.$phone.'</td>
                <td>'.$gender.'</td>
                <td class="action-buttons">
                <a href="'.$suaid_user.'"> <span class="edit-button" onclick="editRow(1)">Sửa</span></a>
                </td>
            </tr>';
            echo $tr;
            
        ?>
                </tbody>
            </table>
        </div>
        <div class="col-12  ls-dp" style="display:none">
            <table>
                <thead>
                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Giới tính</th>
                        <th>Tên phòng</th>
                        <th>Giá phòng</th>
                        <th>Số lượng</th>
                        <th>Ngày nhận - trả phòng</th>
                        <th>Loại phòng</th>
                        <th>Mã phòng</th>
                        <th>Địa điểm</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
                    
                    $load=load_phong_dadat_email($email);
                    $load_hd=load_phong_dadat_email_tc($email);
                    
                   if(empty($load)){
                    foreach ($load_hd as $load_g) {
                        extract($load_g);
                        $tr=' <tr style="border-bottom: 1px solid orangered">
                        <td>'.$id_hd.'</td>
                        <td>'.$name_kh.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$name_rom.'</td>
                        <td>'.number_format($price, 0, ".", ".").' VNĐ</td>
                        <td>'.$quantity.'</td>
                        <td>('.$date_get.') - ('.$date_pay.')</td>
                        <td>'.$type_rom.'</td>
                        <td>'.$ma_rom.'</td>
                        <td>'.$name_des.'</td>
                        <td>'.number_format($sum, 0, ".", ".").'</td>
                        <td style="color:#4CAF50;">'.$status.'</td>
                        <td>
                        </tr>'; echo $tr;
                    }
                    
                    
                } else {
                    foreach ($load as $load_themail) {
                        extract($load_themail);
                        $tr=' <tr style="border-bottom: 1px solid orangered">
                        <td>'.$id_book_rom.'</td>
                        <td>'.$name_kh.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$name_rom.'</td>
                        <td>'.number_format($price, 0, ".", ".").' VNĐ</td>
                        <td>'.$quantity.'</td>
                        <td>('.$date_get.') - ('.$date_pay.')</td>
                        <td>'.$type_rom.'</td>
                        <td>'.$ma_rom.'</td>
                        <td>'.$name_des.'</td>
                        <td>'.number_format($sum, 0, ".", ".").'</td>
                        <td style="color:#4CAF50;">'.$status.'</td>
                        <td>
                        </tr>'; echo $tr;
                    }
                }
                
                ?>
                    <!-- <tr>
                        <td>Ma88</td>
                        <td>nguyễn văn</td>
                        <td>11222@gmail</td>
                        <td>999999</td>
                        <td>nam</td>
                        <td>tên phòng</td>
                        <td>giá phòng</td>
                        <td>số lượng</td>
                        <td>Ngày nhận - trả phòng</td>
                        <td>Loại phòng</td>
                        <td>Mã phòng</td>
                        <td>Địa điểm</td>
                        <td>Tổng tiền</td>
                        <td>Chờ thanh toán</td> -->
                    <!-- <td>Nguyễn Văn A</td>
                        <td>van.a@example.com</td>
                        <td>123</td>
                        <td>0123456789</td>
                        <td>Nam</td>
                        <td class="action-buttons">
                            <span class="delete-button" onclick="deleteRow(1)">Xóa</span>
                            <span class="edit-button" onclick="editRow(1)">Sửa</span>
                        </td> -->

                    <!-- </tr> -->
                    <!-- Thêm thông tin khách hàng khác nếu cần -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
function ls_kh() {
    event.preventDefault();
    let $ttkh = document.querySelector('.tt-kh');
    let $lsdp = document.querySelector('.ls-dp');

    if ($ttkh.style.display === "block") {
        $ttkh.style.display = "none";
        $lsdp.style.display = "block";
    } else {
        $ttkh.style.display = "block";
        $lsdp.style.display = "none";
    }
}
</script>
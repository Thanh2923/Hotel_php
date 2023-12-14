<?php
ob_start();
session_start();
  include("./model/config.php");
  include("./model/roms/rom.php");
  include("./model/danhmucphong/danhmucphong.php");
  include('./model/des/des.php');
  include('./model/bookrom/bookrom.php');
  include('./model/taikhoan/taikhoan.php');
  include('./model/type/tpye.php');
include("./Layouts/header.php");
include("./model/hoadon/hoadon.php");


       if(isset($_GET["action"])){ 
        $action = $_GET["action"];
        switch ($action) {
            case 'roms':
                include("./Layouts/roms.php");
                break;
            
                case 'ctcombo':
                    include("./Layouts/combo.php");
                    break;
                    case 'des':
                        include("./Layouts/des.php");
                        break;

                        case 'timkiem':
                              if(isset($_POST['timkiem'])){
                                $id_des=$_POST['id_des'];
                                $ngaynhann=$_POST['ngaynhann'];
                                $ngaytraa=$_POST['ngaytraa'];
                                $sql=" SELECT *
                                FROM roms where id_des_a='$id_des' ";                                        
                                     $load_tk=pdo_query($sql);
                              }

                            include('./Layouts/rom_tk.php');

                            break;
                
                    case 'ctdatphong':   
                       
                        if(isset($_GET['id_rom'])){
                            $id_rom =$_GET['id_rom'];
                            $load_one=load_one_rom($id_rom);

                        }
                        include("./Layouts/ctdatphong.php");
                        break;
                        case 'ls_rom_kh' :
                            include('./Layouts/kh_rom.php');
                            break;
                      


                            case 'thanhtoan':
                                if(isset($_POST['thtt'])){
                                    if(isset($_SESSION['email'])){
                                        extract($_SESSION['email']);
                                        $sql= "select * from book_rom where email='$email' order by id_book_rom desc ";
                                        $resul= pdo_query_one($sql);
                                        extract($resul);
                  $price_t=number_format($price, 0, ".", "."); 
                  $sum_t=number_format($sum, 0, ".", ".");                                 // Gửi mã xác nhận đến email của người dùng
            $toemail = "$email";
            $subject = "THÔNG TIN ĐẶT PHÒNG :";
            $message = " 
            <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hóa đơn</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .invoice {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 80%;
            max-width: 600px;
            padding: 20px;
            margin: 20px;
            box-sizing: border-box;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .total {
            margin-top: 20px;
            text-align: right;
            color:orangered;
            font-weight: 700;
            font-size: 20px;
        }
        .ctt{
            color:red;
        }
    </style>
</head>
<body>
    <div class='invoice'>
        <h2>Hóa đơn</h2>
        <table>
            <tr>
                <th>Mã hóa đơn</th>
                <td>$id_book_rom</td>
            </tr>
            <tr>
                <th>Tên Khách hàng</th>
                <td>$name_kh</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>$phone</td>
            </tr>
            <tr>
                <th>Giới tính</th>
                <td>$gender</td>
            </tr>
            <tr>
                <th>Tên phòng</th>
                <td>$name_rom</td>
            </tr>
            <tr>
                <th>Giá tiền</th>
                <td>$price_t VNĐ</td>
            </tr>
            <tr>
                <th>Số lượng phòng</th>
                <td>$quantity</td>
            </tr>
            <tr>
                <th>Loại phòng</th>
                <td>$type_rom</td>
            </tr>
            <tr>
                <th>Ngày nhận phòng</th>
                <td>$date_get</td>
            </tr>
            <tr>
                <th>Ngày trả phòng</th>
                <td>$date_pay</td>
            </tr>
            <tr>
            <th>Số ngày</th>
            <td>$number_date</td>
        </tr>
            <tr>
                <th>Số Phòng</th>
                <td>$ma_rom</td>
            </tr>
            <!-- Các trường thông tin khác -->
            <!-- ... -->
            <tr>
                <th>Địa điểm</th>
                <td>$name_des</td>
            </tr>
            <tr>
            <th>Trạng thái</th>
            <td class='ctt'>$status</td>
        </tr>
          
        </table>
        
        <tr>
        <th> <strong class='total'>Tổng cộng:</strong></th>
        <th class='total'> $sum_t VNĐ</th>
        
        </tr>
    </div>
</body>
</html>

            " ;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
            // Đặt địa chỉ email của bạn làm người gửi
            $headers .= "From: thanhnv2923@gmail.com" . "\r\n"; // Thay thế bằng địa chỉ email của bạn
            if (mail($toemail, $subject, $message, $headers)) {
                header('location: ./index.php?action=thongbao'); }
          
                                        
                                    }
                                    
                                }else{
                                    if(isset($_POST['thtt_out'])){
                                        if(isset($_GET['ngay_nhan']) && isset($_GET['ngay_tra']) && isset($_GET['id_rom'])){
                                            $name_kh=$_POST['name_kh'];
                                            $id_rom=$_GET['id_rom'];
                                            $ngaynhann=$_GET['ngay_nhan'];
                                            $ngaytraa=$_GET['ngay_tra'];
                                            $email =$_POST['email'];
                                            $phone=$_POST['phone'];
                                            $gender=$_POST['gender'];
                                            $sql="UPDATE book_rom set name_kh='$name_kh', email='$email',phone='$phone',gender='$gender' where date_get='$ngaynhann' and date_pay='$ngaytraa' and id_rom_t='$id_rom' ";
                                            pdo_execute($sql);
                                        }
                                    

                                        if(true){
                                            $sql= "select * from book_rom where email='$email' order by id_book_rom desc ";
                                        $resul= pdo_query_one($sql);
                                        
                                        extract($resul);
                                        $price_t=number_format($price, 0, ".", "."); 
                                        $sum_t=number_format($sum, 0, ".", ".");                                 // Gửi mã xác nhận đến email của người dùng
                                  $toemail = "$email";
                                  $subject = "THÔNG TIN ĐẶT PHÒNG :";
                                  $message = " 
                                  <!DOCTYPE html>
                      <html lang='en'>
                      <head>
                          <meta charset='UTF-8'>
                          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                          <title>Hóa đơn</title>
                          <style>
                              body {
                                  font-family: 'Arial', sans-serif;
                                  background-color: #f2f2f2;
                                  margin: 0;
                                  padding: 0;
                                  display: flex;
                                  justify-content: center;
                                  align-items: center;
                                  min-height: 100vh;
                              }
                              .invoice {
                                  background-color: #fff;
                                  border-radius: 10px;
                                  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                                  overflow: hidden;
                                  width: 80%;
                                  max-width: 600px;
                                  padding: 20px;
                                  margin: 20px;
                                  box-sizing: border-box;
                              }
                              h2 {
                                  color: #333;
                                  text-align: center;
                              }
                              table {
                                  width: 100%;
                                  border-collapse: collapse;
                                  margin-top: 20px;
                              }
                              th, td {
                                  border: 1px solid #ddd;
                                  padding: 12px;
                                  text-align: left;
                              }
                              th {
                                  background-color: #f2f2f2;
                              }
                              .total {
                                  margin-top: 20px;
                                  text-align: right;
                                  color:orangered;
                                  font-weight: 700;
                                  font-size: 20px;
                              }
                              .ctt{
                                  color:red;
                              }
                          </style>
                      </head>
                      <body>
                          <div class='invoice'>
                              <h2>Hóa đơn</h2>
                              <table>
                                  <tr>
                                      <th>Mã hóa đơn</th>
                                      <td>$id_book_rom</td>
                                  </tr>
                                  <tr>
                                      <th>Tên Khách hàng</th>
                                      <td>$name_kh</td>
                                  </tr>
                                  <tr>
                                      <th>Email</th>
                                      <td>$email</td>
                                  </tr>
                                  <tr>
                                      <th>Phone</th>
                                      <td>$phone</td>
                                  </tr>
                                  <tr>
                                      <th>Giới tính</th>
                                      <td>$gender</td>
                                  </tr>
                                  <tr>
                                      <th>Tên phòng</th>
                                      <td>$name_rom</td>
                                  </tr>
                                  <tr>
                                      <th>Giá tiền</th>
                                      <td>$price_t VNĐ</td>
                                  </tr>
                                  <tr>
                                      <th>Số lượng phòng</th>
                                      <td>$quantity</td>
                                  </tr>
                                  <tr>
                                      <th>Loại phòng</th>
                                      <td>$type_rom</td>
                                  </tr>
                                  <tr>
                                      <th>Ngày nhận phòng</th>
                                      <td>$date_get</td>
                                  </tr>
                                  <tr>
                                      <th>Ngày trả phòng</th>
                                      <td>$date_pay</td>
                                  </tr>
                                  <tr>
                                  <th>Số ngày</th>
                                  <td>$number_date</td>
                              </tr>
                                  <tr>
                                      <th>Số Phòng</th>
                                      <td>$ma_rom</td>
                                  </tr>
                                  <!-- Các trường thông tin khác -->
                                  <!-- ... -->
                                  <tr>
                                      <th>Địa điểm</th>
                                      <td>$name_des</td>
                                  </tr>
                                  <tr>
                                  <th>Trạng thái</th>
                                  <td class='ctt'>$status</td>
                              </tr>
                                
                              </table>
                              
                              <tr>
                              <th> <strong class='total'>Tổng cộng:</strong></th>
                              <th class='total'> $sum_t VNĐ</th>
                              
                              </tr>
                          </div>
                      </body>
                      </html>
                      
                                  " ;
                                  $headers = "MIME-Version: 1.0" . "\r\n";
                                  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                              
                                  // Đặt địa chỉ email của bạn làm người gửi
                                  $headers .= "From: thanhnv2923@gmail.com" . "\r\n"; // Thay thế bằng địa chỉ email của bạn
                                  if (mail($toemail, $subject, $message, $headers)) {
                                    header('location: ./index.php?action=thongbao');
                                  } 
                                 
                
                                        }
                                        
                                    }
                                }
                                
                                include('./thanhtoan.php');
                                break;
            case 'thoat':

                session_unset();
                
                header('location: index.php');
            break;
            case 'thongbao':
                include('./Layouts/thongbao.php');
                break;

                case 'suaid_user':
                    if(isset($_GET['id_user'])){
                        $load_rom_id_user=suaid_user();
                           
                    }
                    include "./Layouts/up_user.php";
                    break;
                case 'up_user':
                    if(isset($_POST["up_user"]) ){
                        $id_user=$_POST['id_user'];
                        $email = $_POST["email"];
                        $pass= $_POST["pass"];
                        $name_kh = $_POST["name_kh"];
                        $gender = $_POST["gender"];
                        $phone = $_POST["phone"];
                        update_user($email,$pass,$name_kh,$gender,$phone,$id_user);
                            
                            }
                           
                        include('./Layouts/kh_rom.php');
                            
                    break;

                    
                        case 'tintuc':
                            include "./Layouts/tintuc.php";
                            break;
                            case 'ct_tintuc':
                                if(isset($_GET['id_news'])){
                                    $id_news=$_GET['id_news'];
                                    $sql="select * from news where id_news=".$id_news;
                                    $load_one_tt=pdo_query_one($sql);
                                }
                                include "./Layouts/ct_tintuc.php";
                                break;
           
                
                    
            
        }
    
        
    }else{
        include("./pages/home.php");
            
    }


include("./Layouts/footer.php");
ob_end_flush();
?>
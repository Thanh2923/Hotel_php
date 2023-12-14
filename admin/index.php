<?php  
  include("./layouts/header.php");
  include("../model/config.php");
  include('../model/danhmucphong/danhmucphong.php');
  include('../model/roms/rom.php');
  include('../model/taikhoan/taikhoan.php');
  include('../model/hoadon/hoadon.php');
  
  include('../model/des/des.php');
  include('../model/bookrom/bookrom.php');
    
   if(isset($_GET['admin'])){
    $admin=$_GET['admin'];
    switch ($admin) {
        case 'danhmucphong':
           
            if(isset($_POST['add_dmphong'])){
                $dmphong=$_POST['dmphong'];
                into_dm_phong($dmphong);
                echo '<script> alert("Thêm mới thành công!");
                                                  // Hiển thị thông báo sau khi trang đã tải xong
                                                  window.onload = function() {
                                                      // Hiển thị thông báo "Chưa đăng nhập" trong 2 giây
                                                      setTimeout(function() {
                                                          
                                                          
                                                          // Chuyển hướng trang sau khi hiển thị thông báo
                                                          window.location.href = "index.php?admin=ds_phong"; // Thay thế "URL_chuyen_huong" bằng đường link bạn muốn chuyển đến
                                                      }, 500); // 2000 milliseconds = 2 giây
                                                  };
                                              </script>';

                
            }
           include('./view/menu/add_menu.php');
            break;

            case 'suaid_menu':
                if(isset($_GET['id_menu'])){
                    $load_menu_id_menu=suaid_menu();
                       
                }
                include "./view/menu/up_menu.php";
                break;
  
                case 'up_menu':
                  if(isset($_POST['up_menu'])){
                    $name_menu=$_POST['name_menu'];
                    $id_menu=$_POST['id_menu'];
                    up_menu($name_menu,$id_menu);

                  }
                  $load_all_dsphong=load_all_dm_phong();
                  include "./view/menu/ds_phong.php";
                  break;
            case 'menu_rom':
                include('./view/roms/menu_rom.php');
                break;
                case 'add_destination':
                    if(isset($_POST['add_des'])){
                        $id_dm=$_POST['id_dm'];
                        $name_des=$_POST['name_des'];
                        $image_rom=basename($_FILES['image_des']['name']);
                        $target_dir="../uploads/";
                        $target_file = $target_dir . $image_rom;
                        if(move_uploaded_file($_FILES["image_des"]["tmp_name"], $target_file)){
                          
                        }
                        into_destination($name_des,$image_rom,$id_dm);
                        $load_all_des = load_all_des();
                                
                                include('./view/roms/ds_des.php');
                    }
                    include('./view/roms/add_destination.php');
                    break;
                     case 'delete_rom_r':
                        delete_rom();
                        $load_all_rom = load_all_rom();
                        include('./view/roms/ds_rom.php');    
                        break;
                    case 'delete_rom':
                        if($_GET['id_rom']){
                            $id_rom=$_GET['id_rom'];
                            echo "<script> var dt= confirm('Bạn có muốn xóa không');
                            if(dt){
                               window.location.href='index.php?admin=delete_rom_r&id_rom=$id_rom';
                            }
                            else{
                                window.location.href='index.php?admin=ds_rom'; 
                            }
                           </script>";
                          
                            
                        }
                        $load_all_rom = load_all_rom();
                        include('./view/roms/ds_rom.php');    
                        break;
                    case 'suaid_rom':
                        if(isset($_GET['id_rom'])){
                            $load_rom_id_rom=suaid_rom();
                               
                        }
                        include "./view/roms/up_rom.php";
                        break;
          
                        case 'up_rom':
                          if(isset($_POST['up_rom'])){
                            $id_rom=$_POST['id_rom'];
                            $ma_rom=$_POST['ma_rom'];
                            $id_des=$_POST['id_des'];
                            $id_menu_dm=$_POST['id_menu'];
                            $name_rom=$_POST['name_rom'];
                            $price_rom=$_POST['price_rom'];
                            $image_rom=basename($_FILES['image_rom']['name']);
                            $target_dir="../uploads/";
                            $target_file = $target_dir . $image_rom;
    
                           
                           
                            if(move_uploaded_file($_FILES["image_rom"]["tmp_name"], $target_file)){
                              
                            }
                           
                            up_rom($name_rom,$price_rom,$image_rom,$ma_rom,$id_menu_dm,$id_des,$id_rom);
                          }
                          $load_all_rom = load_all_rom();
                          include('./view/roms/ds_rom.php');    
                          break;
            case 'ds_phong':
                    $load_all_dsphong = load_all_dm_phong();
                
                include('./view/menu/ds_phong.php');
                break;

                case 'delete_dm_d':
                         delete_dm_phong();
                         $load_all_dsphong=load_all_dm_phong();
                    
                         include('./view/menu/ds_phong.php');
                    break;

                case 'delete_dm':
                   
                    if($_GET['id_menu']){
                        $id_menu=$_GET['id_menu'];
                        echo "<script> var dt= confirm('Bạn có muốn xóa không');
                         if(dt){
                            window.location.href='index.php?admin=delete_dm_d&id_menu=$id_menu';
                         }else{
                            window.location.href='index.php?admin=ds_phong';

                         }
                        </script>";

                        
                    }
                  
                    
                    
                    break;



                case 'add_rom':
                    
                     if(isset($_POST['add_rom'])){
                        $ma_rom=$_POST['ma_rom'];
                        $id_des=$_POST['id_des'];
                        $id_menu_dm=$_POST['id_menu'];
                        $name_rom=$_POST['name_rom'];
                        $price_rom=$_POST['price_rom'];
                        $image_rom=basename($_FILES['image_rom']['name']);
                        $target_dir="../uploads/";
                        $target_file = $target_dir . $image_rom;

                       
                       
                        if(move_uploaded_file($_FILES["image_rom"]["tmp_name"], $target_file)){
                          
                        }
                       
                       
                       into_roms($name_rom,$price_rom,$image_rom,$ma_rom,$id_menu_dm,$id_des);
                       $load_all_rom = load_all_rom();
                       include('./view/roms/ds_rom.php');
                     }
                     
    
                    include('./view/roms/add_rom.php');
                    break;


                    case 'ds_rom':
                        
                        $load_all_rom = load_all_rom();
                        include('./view/roms/ds_rom.php');
                    
                        break;


                        case 'ds_user':
                            $load_user =load_user();
                            include('./view/user/ds_user.php');
                            break;
                            

                            case 'delete_user_u':
                                delete_user();
                                $load_user =load_user();
                                include('./view/user/ds_user.php');
                                break;

                            case 'delete_user':
                                if($_GET['id_user']){
                                    $id_user=$_GET['id_user'];
                                    echo "<script> var dt= confirm('Bạn có muốn xóa không');
                                    if(dt){
                                       window.location.href='index.php?admin=delete_user_u&id_user=$id_user';
                                    }
                                    else{
                                        window.location.href='index.php?admin=ds_user'; 
                                    }
                                   </script>";
                                  
                                     
                                 }
                               
                                 break;

                                 case 'suaid_user':
                                    if(isset($_GET['id_user'])){
                                        $load_rom_id_user=suaid_user();
                                           
                                    }
                                    include "./view/user/up_user.php";
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
                                                $load_user =load_user();
                                                include('./view/user/ds_user.php');
                                                
                                                
                                        break;

                            case 'bookrom':
                                $load_bookrom=load_phong_da_dat();
                                include('./view/bookrom/datphong.php');
                                break;

                                case 'delete_book_rom_b':
                                    delete_bookrom();
                                    $load_bookrom=load_phong_da_dat();
                                    include('./view/bookrom/datphong.php');
                                    break;
                                case 'delete_bookrom':
                                    if($_GET['id_book_rom']){
                                        $id_book_rom=$_GET['id_book_rom'];
                                        echo "<script> var dt= confirm('Bạn có muốn xóa không');
                                        if(dt){
                                           window.location.href='index.php?admin=delete_book_rom_b&id_book_rom=$id_book_rom';
                                        }
                                        else{
                                            window.location.href='index.php?admin=bookrom'; 
                                        }
                                       </script>";
                                      
                                         
                                     }
                                    
                                     break;
                                   
    

                                case 'xacnhan':
                                     if(isset($_POST['xacnhan'])){
                                        $thanhcong=$_POST['thanhcong'];
                                        $id_book_rom=$_POST['id_book_rom'];
                                        $name_kh=$_POST['name_kh'];
                                        $email=$_POST['email'];
                                        $phone=$_POST['phone'];
                                        $gender=$_POST['gender'];
                                        $name_rom=$_POST['name_rom'];
                                        $price=$_POST['price'];
                                        $quantity=$_POST['quantity'];
                                        $date_get=$_POST['date_get'];
                                        $date_pay=$_POST['date_pay'];
                                        $number_date=$_POST['number_date'];
                                        $type_rom=$_POST['type_rom'];
                                        $name_des=$_POST['name_des'];
                                        $ma_rom=$_POST['ma_rom'];
                                        $sum=$_POST['sum'];
                                        $status=$_POST['status'];
                                        $id_menu_b=$_POST['id_menu_b'];
                                        $sqll="insert into hoa_don(name_kh,email,phone,gender,name_rom,price,quantity,date_get,date_pay,number_date,type_rom,name_des,ma_rom,status,sum,id_menu_hd) values('$name_kh','$email','$phone','$gender','$name_rom','$price','$quantity','$date_get','$date_pay','$number_date','$type_rom','$name_des','$ma_rom','$thanhcong','$sum','$id_menu_b')";
                                        pdo_execute($sqll);













                                 

                                        $sql="update book_rom set  status='".$thanhcong."' where id_book_rom=".$id_book_rom ;
                                    pdo_execute($sql);
                                      


                                $sql= "select * from book_rom where id_book_rom='$id_book_rom'";
                                        $resul= pdo_query_one($sql);
                                        extract($resul);
                                        $price_t=number_format($price, 0, ".", "."); 
                  $sum_t=number_format($sum, 0, ".", ".");    
                                $toemail = "$email";
                                $subject = "THANH TOÁN TIỀN ĐẶT PHÒNG THÀNH CÔNG :";
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
                                color: #45a049;
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
                                <td>$time_dp</td>
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
                                    echo "Mã xác nhận đã được gửi đến địa chỉ email của bạn. Vui lòng kiểm tra hộp thư đến.";
                                  
                                } 
                                        
                                     }

                                    $load_bookrom=load_phong_da_dat();
                                include('./view/bookrom/datphong.php');
                                    break;

                                case 'ds_des':
                                    $load_all_des = load_all_des();
                                
                                include('./view/roms/ds_des.php');
                                break;

                                case 'delete_des_d':
                                    delete_des();
                                    $load_all_des = load_all_des();
                                
                                    include('./view/roms/ds_des.php');
                                    break;

                                case 'delete_des':
                                    if($_GET['id_des']){
                                        $id_des=$_GET['id_des'];
                                        echo "<script> var dt= confirm('Bạn có muốn xóa không');
                                        if(dt){
                                           window.location.href='index.php?admin=delete_des_d&id_des=$id_des';
                                        }
                                        else{
                                            window.location.href='index.php?admin=ds_des'; 
                                        }
                                       </script>";
                                        
                                    }
                                    
                                    break;
                                case 'suaid_des':
                                    if(isset($_GET['id_des'])){
                                        $load_rom_id_des=suaid_des();
                                           
                                    }
                                    include "./view/roms/up_des.php";
                                    break;
                      
                                    case 'up_des':
                                        if(isset($_POST['up_des'])){
                                            $id_des=$_POST['id_des'];
                                            $id_dm=$_POST['id_dm'];
                                            $name_des=$_POST['name_des'];
                                            $image_des=basename($_FILES['image_des']['name']);
                                            $target_dir="../uploads/";
                                            $target_file = $target_dir . $image_des;
                                            if(move_uploaded_file($_FILES["image_des"]["tmp_name"], $target_file)){
                                              
                                            }
                                            up_des($name_des,$image_des,$id_dm,$id_des);
                                        }
                                        $load_all_des = load_all_des();
                                
                                      include('./view/roms/ds_des.php');    
                                      break;

                                      case 'thongke':
                                        include('./view/thongke/thongke.php');
                                        break;

                                        case 'add_news':
                                            $date = isset($_POST['date']) ? $_POST['date'] : date('Y-m-d');
                                            $hinh = isset($_POST['image_rom']) ? $_POST['image_rom'] : $image_rom;
                                            if (isset($_POST['tintuc'])) {
                                                $title = $_POST["title"];
                                                $id_dm=$_POST['id_dm'];
                                                $subtitle = $_POST["subtitle"];
                                                $content = $_POST["content"];
                                                $date = $_POST["date"];
                                                $image_rom=basename($_FILES['image_rom']['name']);
                                              

                                                $target_dir="../uploads/";
                                           $target_file = $target_dir . $image_rom;
                                           

                                      
                
                                     if(move_uploaded_file($_FILES["image_rom"]["tmp_name"], $target_file)){
                                          }
                                        
                                            
                                                $sqlh = "INSERT INTO news (title,title_sub,image_news,content_news,date,id_menu_a) VALUES ('$title', '$subtitle','$image_rom','$content', '$date','$id_dm')";
                                                pdo_execute($sqlh);
                                                  echo '<script> alert("Thêm mới thành công!");
                                                  // Hiển thị thông báo sau khi trang đã tải xong
                                                  window.onload = function() {
                                                      // Hiển thị thông báo "Chưa đăng nhập" trong 2 giây
                                                      setTimeout(function() {
                                                          // Chuyển hướng trang sau khi hiển thị thông báo
                                                          window.location.href = "index.php?admin=ds_tt"; // Thay thế "URL_chuyen_huong" bằng đường link bạn muốn chuyển đến
                                                      }, 500); // 2000 milliseconds = 2 giây
                                                  };
                                              </script>';

                                            }
                                            include('./view/news/tintuc.php');
                                            break;
                                              
                                            case 'sua_tt':
                                                if(isset($_GET['id_news'])){
                                                    $sql="Select * from news where id_news=".$_GET['id_news'];
                                                 $load_tt_up=pdo_query_one($sql); 
                                                }
                                                 include "./view/news/up_tt.php";
                                                break;
                                                case 'up_tintuc':
                                                    if(isset($_POST['up_tintuc'])){
                                                        $title = $_POST["title"];
                                                        $id_news=$_POST['id_news'];
                                                        $id_dm=$_POST['id_dm'];
                                                        $subtitle = $_POST["subtitle"];
                                                        $content = $_POST["content"];
                                                        $date = $_POST["date"];
                                                        $image_rom=basename($_FILES['image_rom']['name']);
                                                      
        
                                                        $target_dir="../uploads/";
                                                   $target_file = $target_dir . $image_rom;
                                                   
        
                                              
                        
                                             if(move_uploaded_file($_FILES["image_rom"]["tmp_name"], $target_file)){
                                                  }

                                                  $sql="update news set title='$title',title_sub='$subtitle',image_news='$image_rom',content_news='$content',date='$date',id_menu_a='$id_dm' where id_news='$id_news'";
                                                  pdo_execute($sql);
                                                  echo '<script> alert("Cập nhật thành công!");
                                                  // Hiển thị thông báo sau khi trang đã tải xong
                                                  window.onload = function() {
                                                      // Hiển thị thông báo "Chưa đăng nhập" trong 2 giây
                                                      setTimeout(function() {
                                                          // Chuyển hướng trang sau khi hiển thị thông báo
                                                          window.location.href = "index.php?admin=ds_tt"; // Thay thế "URL_chuyen_huong" bằng đường link bạn muốn chuyển đến
                                                      }, 500); // 2000 milliseconds = 2 giây
                                                  };
                                              </script>';
                                                
                                                    }
                                                    break;
                                            case 'delete_tt':
                                                 if(isset($_GET['id_news'])){
                                                    $sql2="delete from news where id_news=".$_GET['id_news'];
                                                    pdo_execute($sql2);
                                                 }
                                                 $sql="Select * from news order by id_news desc";
                                                 $load_tt=pdo_query($sql);
                                                 include('./view/news/ds_tt.php');
                                                break;
                                            case 'ds_tt':
                                                $sql="Select * from news order by id_news desc";
                                                $load_tt=pdo_query($sql);
                                            include('./view/news/ds_tt.php');
                                                
                                                break;

                                                case 'hoadon':
                                                    $load_hoadon=load_hoadon();
                                                    include('./view/hoa_don/ds_hoadon.php');
                                                    break;





       
    }

   }else{
    include('./layouts/home.php');

   }

  include("./layouts/footer.php");
   

?>
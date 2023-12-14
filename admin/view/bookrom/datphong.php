<?php 
  if(is_array($load_bookrom))
  extract($load_bookrom);
  
?>

<style>
td {
    font-size: 13px;
    color: black;
}
</style>

<div class="admin-content">
    <div class="tiled">
        <h3>DANH SÁCH PHÒNG</h3>
    </div>

    <hr>
    <div class="row">
        <div class="col-12" style="display:block">
            <table>
                <thead>


                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Tên khách hàng - Email - Số điện thoại - Giới tính</th>
                        <!-- <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Giới tính</th> -->
                        <th>Tên phòng - Địa điểm - Giá phòng</th>
                        <th>Số lượng- Ngày</th>
                        <th>Ngày nhận - trả phòng</th>
                        <th>Loại phòng</th>
                        <th>Mã phòng</th>
                        <th>Tổng tiền</th>
                        <th>Thời gian đặt</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php  
                    foreach ($load_bookrom as $load) {
                        extract($load);
                       ?>

                    <form action="index.php?admin=xacnhan" method="post">
                        <tr>
                            <td><?=$id_book_rom?></td>
                            <td>- <?=$name_kh?> <br> - <?=$email?> <br> - <?=$phone?> <br> - <?=$gender?></td>
                            <input type="hidden" value="<?=$name_kh?>" name="name_kh">
                            <input type="hidden" value="<?=$email?>" name="email">
                            <input type="hidden" value="<?=$phone?>" name="phone">
                            <input type="hidden" value="<?=$gender?>" name="gender">

                            <td> - <?=$name_rom?> <br> - <?=$name_des?> <br> <span
                                    style="color:orangered"><?=number_format($price, 0, ".", ".")?></span> </td>
                            <input type="hidden" value="<?=$name_rom?>" name="name_rom">
                            <input type="hidden" value="<?=$price?>" name="price">
                            <input type="hidden" value="<?=$name_des?>" name="name_des">

                            <td> <?=$quantity.'- '.$number_date?></td>
                            <input type="hidden" value="<?=$quantity?>" name="quantity">
                            <input type="hidden" value="<?=$number_date?>" name="number_date">
                            <td> <?=$date_get.'- '.$date_pay?></td>
                            <input type="hidden" value="<?=$date_get?>" name="date_get">
                            <input type="hidden" value="<?=$date_pay?>" name="date_pay">

                            <td>- <?=$type_rom?></td>
                            <input type="hidden" value="<?=$type_rom?>" name="type_rom">

                            <td> <?=$ma_rom?></td>
                            <input type="hidden" value="<?=$ma_rom?>" name="ma_rom">




                            <td> <?=number_format($sum, 0, ".", ".")?>VNĐ</td>
                            <input type="hidden" value="<?=$sum?>" name="sum">
                            <td> <?=$time_dp?></td>
                            <td style="color:#4CAF50;"><?=$status?></td>
                            <input type="hidden" value="<?=$id_menu_b?>" name="id_menu_b">
                            <td>
                                <input type="hidden" value="<?=$status?>" name="status">
                                <?php if($status === 'Đang xử lý') {?>
                                <input type="hidden" value="<?=$id_book_rom?>" name="id_book_rom">
                                <input type="hidden" value="Thành công" name="thanhcong">
                                <input type="submit" name="xacnhan" class="btn btn-warning mb-3" value="Xác nhận">

                                <?php } else{ 
                                    
                                    ?>

                                <?php 
                                
                                ?>
                                <?php }?>

                                <a class="text-decoration-none"
                                    href="index.php?admin=delete_bookrom&id_book_rom=<?=$id_book_rom?>"> <span
                                        class="delete-button-hd" onclick="deleteRow(1)">Hủy</span> </a>
                            </td>
                        </tr>
                    </form>


                    <?php }?>





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


                    <!-- Thêm thông tin khách hàng khác nếu cần -->
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php 
  if(is_array($load_hoadon))
  extract($load_hoadon);
  
?>

<style>
td {
    font-size: 13px;
    color: black;
}


/* Add more styles for your invoice layout */
</style>

<div class="admin-content">
    <div class="tiled">
        <h3>HÓA ĐƠN</h3>
    </div>

    <hr>
    <div class="row">
        <div class="col-12" style="display:block">
            <table id="invoiceTable">
                <thead>


                    <tr>
                        <th>Mã hóa đơn</th>
                        <th>Tên khách hàng - Email - Số điện thoại - Giới tính</th>
                        <th>Tên phòng</th>
                        <th>Giá phòng</th>
                        <th>Số lượng- Ngày</th>
                        <th>Ngày nhận - trả phòng</th>
                        <th>Loại phòng</th>
                        <th>Mã phòng</th>
                        <th>Địa điểm</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php  
                     $per_page = 3;
                     $page=!empty($_GET['page']) ? $_GET['page'] : 1;
                     $offset =($page-1) * $per_page;
                     $sql="select * from hoa_don order by id_hd desc limit $per_page  offset $offset  ";
                     $result =pdo_query($sql);
                     
                     $sqlr = "SELECT * FROM hoa_don ";
                     // Thực thi truy vấn
                     $resultr = $conn->query($sqlr);
                      $totalRows = $resultr->num_rows;
                     $tatal_page =ceil($totalRows / $per_page);
                     
                    foreach ($result as $loadhd) {
                        extract($loadhd);
                       ?>


                    <tr>
                        <td><?=$id_hd?></td>
                        <td><?=$name_kh?> <br> - <?=$email?> <br> - <?=$phone?> <br> - <?=$gender?></td>
                        <td> <?=$name_rom?></td>
                        <td> <?=number_format($price, 0, ".", ".")?></td>
                        <td> <?=$quantity.'- '.$number_date?></td>
                        <td> <?=$date_get.'- '.$date_pay?></td>
                        <td> <?=$type_rom?></td>
                        <td> <?=$ma_rom?></td>
                        <td> <?=$name_des?></td>
                        <td> <?=number_format($sum, 0, ".", ".")?>VNĐ</td>
                        <td style="color:#4CAF50;"><?=$status?></td>

                        <td>


                            <input type="button" onclick="printRow(0)" name="xacnhan" class="btn btn-warning mb-3"
                                value="In hóa đơn">


                        </td>
                    </tr>



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
    <div class="contaner">
        <div class="row my-5">

            <div class="col text-center">

                <?php if($page >1 ) {  $prev_page= $page-1;?>

                <a href="index.php?admin=hoadon&page=<?=$prev_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-left" style="color: #ffbb00;"></i></a>

                <?php }?>
                <?php for ($num=1 ; $num <= $tatal_page ; $num++) { 
        
        ?>
                <?php if($page != $num) {?>
                <?php if($num > $page - 3 && $num < $page +3 ) {?>
                <a href="index.php?admin=hoadon&page=<?=$num?>" class="btn btn-light"><?=$num?></a>
                <?php }?>
                <?php } else {?>
                <strong class="btn btn-warning"><?=$num?></strong>
                <?php }?>

                <?php }?>
                <?php if($page < $totalRows-9 ) {  $next_page= $page+1;?>

                <a href="index.php?admin=hoadon$page=<?=$next_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-right" style="color: #ffbb00;"></i></a>

                <?php }?>
            </div>

        </div>
    </div>



    <script>
    // JavaScript code for handling printing
    function printRow(rowIndex) {
        var rowData = [];
        $('#invoiceTable tbody tr').eq(rowIndex).find('td').each(function() {
            var cellData = $(this).text();
            rowData.push(cellData);
        });

        // Convert the row data to a string
        var rowString = rowData.join('\t'); // Sử dụng dấu tab hoặc ký tự phù hợp


        var printWindow = window.open('');
        printWindow.document.write('<pre>' + rowString + '</pre>');
        printWindow.document.close();

        // Print the new window
        printWindow.print();
    }
    </script>


</div>
<div class="admin-content">
    <div class="tiled">
        <h3>DANH SÁCH ƯA ĐÃI - COMBO</h3>
    </div>
    <div class="search-ds-phong mt-3" style="width: 80%; ">
        <div class="input-group flex-nowrap">

            <input type="text" class="form-control" name="timkiem" placeholder="Tìm kiếm phòng...  "
                aria-label="Username" aria-describedby="addon-wrapping">
            <button type="submit" name="timkiem" class="btn btn-warning">Tìm kiếm</button>


            <div class="row ">

                <div class="col text-center ">
                    <a href="index.php?admin=add_rom"><button type="submit" class="btn btn-primary" name="add_rom">Thêm
                            mới</button></a>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Id_menu</th>
                <th>id_des</th>
                <th>ID rom</th>
                <th>Name rom</th>
                <th>Price rom</th>
                <th>Image rom</th>
                <th>Mã rom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php  
             $per_page = 4;
             $page=!empty($_GET['page']) ? $_GET['page'] : 1;
             $offset =($page-1) * $per_page;
             $sql="select * from roms order by id_rom desc limit $per_page  offset $offset  ";
             $result =pdo_query($sql);
             
             $sqlr = "SELECT * FROM roms ";
             // Thực thi truy vấn
             $resultr = $conn->query($sqlr);
              $totalRows = $resultr->num_rows;
             $tatal_page =ceil($totalRows / $per_page);
                    foreach ($result as $load_rom) {

                        $path_img="../uploads/";
                        extract($load_rom);
                        $suaid_rom="index.php?admin=suaid_rom&id_rom=".$id_rom;
                        $delete_rom="index.php?admin=delete_rom&id_rom=".$id_rom;
                        $img=$path_img.$image_rom;
                        
                        $tr =' <div class="table-tr">  
                    <tr>
                    <td>'.$id_menu_r.'</td>
                    <td>'.$id_des_a.'</td>
                    <td>'.$id_rom.'</td>
                    <td>'.$name_rom.'</td>
                    <td>'.$price_rom.'</td>
                    <td>  <img src="'.$img.'" alt="" width="150px" height="100px"></td>
                    <td>'.$ma_rom.'</td>
                    <td class="action-buttons">
                      <a class="text-decoration-none" href="'.$delete_rom.'">  <span class="delete-button" onclick="deleteRow(1)">Xóa</span> </a>
                      <a class="text-decoration-none" href="'.$suaid_rom.'">   <span class="edit-button" onclick="editRow(1)">Sửa</span> </a>
                    </td>
                </tr>
                 </div> ';
             echo $tr ;
                    
                    }
                ?>

        </tbody>


    </table>

    <div class="contaner">
        <div class="row my-5">

            <div class="col text-center">

                <?php if($page >1 ) {  $prev_page= $page-1;?>

                <a href="index.php?admin=ds_rom&page=<?=$prev_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-left" style="color: #ffbb00;"></i></a>

                <?php }?>
                <?php for ($num=1 ; $num <= $tatal_page ; $num++) { 
        
        ?>
                <?php if($page != $num) {?>
                <?php if($num > $page - 3 && $num < $page +3 ) {?>
                <a href="index.php?admin=ds_rom&page=<?=$num?>" class="btn btn-light"><?=$num?></a>
                <?php }?>
                <?php } else {?>
                <strong class="btn btn-warning"><?=$num?></strong>
                <?php }?>

                <?php }?>
                <?php if($page < $totalRows-9 ) {  $next_page= $page+1;?>

                <a href="index.php?admin=ds_rom$page=<?=$next_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-right" style="color: #ffbb00;"></i></a>

                <?php }?>
            </div>

        </div>
    </div>

</div>
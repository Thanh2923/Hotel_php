<div class="admin-content">
    <div class="tiled">
        <h3>DANH SÁCH ĐIỂM ĐẾN</h3>
    </div>
    <div class="search-ds-phong mt-3" style="width: 80%; ">
        <div class="input-group flex-nowrap">

            <input type="text" class="form-control" name="timkiem" placeholder="Tìm kiếm phòng...  "
                aria-label="Username" aria-describedby="addon-wrapping">
            <button type="submit" name="timkiem" class="btn btn-warning">Tìm kiếm</button>


            <div class="row ">

                <div class="col text-center ">
                    <a href="index.php?admin=add_destination"><button type="submit" class="btn btn-primary"
                            name="add_des">Thêm
                            mới</button></a>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <table>
        <thead>
            <tr>

                <th>Id des</th>
                <th>Name des</th>
                <th>Image rom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php  
             $per_page = 4;
             $page=!empty($_GET['page']) ? $_GET['page'] : 1;
             $offset =($page-1) * $per_page;
             $sql="select * from destination order by id_des desc limit $per_page  offset $offset  ";
             $result =pdo_query($sql);
             
             $sqlr = "SELECT * FROM destination ";
             // Thực thi truy vấn
             $resultr = $conn->query($sqlr);
              $totalRows = $resultr->num_rows;
             $tatal_page =ceil($totalRows / $per_page);
                    foreach ($result as $load_des) {
                        $path_img="../uploads/";
                        extract($load_des);
                        $suaid_des="index.php?admin=suaid_des&id_des=".$id_des;
                        $delete_des="index.php?admin=delete_des&id_des=".$id_des;
                        $img=$path_img.$image_des;
                        $tr =' <div class="table-tr">  <tr>
                       
                        <td>'.$id_des.'</td>
                        <td>'.$name_des.'</td>
                        <td> <img src="'.$img.'" alt="" width="150px" height="100px"></td>
                        <td class="action-buttons">
                        <a class="text-decoration-none" href="'.$delete_des.'">  <span class="delete-button" onclick="deleteRow(1)">Xóa</span> </a>
                        <a class="text-decoration-none"  href="'.$suaid_des.'"><span class="edit-button" onclick="editRow(1)">Sửa</span> </a>
                    </td>
                    </tr>  
                   
                 </div>  ';
             echo $tr ;
                    
                    }
                ?>


        </tbody>


    </table>
    <div class="contaner">
        <div class="row my-5">

            <div class="col text-center">

                <?php if($page >1 ) {  $prev_page= $page-1;?>

                <a href="index.php?admin=ds_des&page=<?=$prev_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-left" style="color: #ffbb00;"></i></a>

                <?php }?>
                <?php for ($num=1 ; $num <= $tatal_page ; $num++) { 
        
        ?>
                <?php if($page != $num) {?>
                <?php if($num > $page - 3 && $num < $page +3 ) {?>
                <a href="index.php?admin=ds_des&page=<?=$num?>" class="btn btn-light"><?=$num?></a>
                <?php }?>
                <?php } else {?>
                <strong class="btn btn-warning"><?=$num?></strong>
                <?php }?>

                <?php }?>
                <?php if($page < $totalRows-9 ) {  $next_page= $page+1;?>

                <a href="index.php?admin=ds_des$page=<?=$next_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-right" style="color: #ffbb00;"></i></a>

                <?php }?>
            </div>

        </div>
    </div>

</div>
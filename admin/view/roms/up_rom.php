<?php  session_start();


if(is_array($load_rom_id_rom)){
    extract($load_rom_id_rom);
}
   
?>

<div class="admin-content">
    <div class="tiled">
        <h3>CẬP NHẬT PHÒNG ƯA ĐÃI</h3>
    </div>

    <div class="container my-5">
        <form action="index.php?admin=up_rom" method="post" enctype="multipart/form-data">
            <div class="row ">
                <div class="col">
                    <label for="inputPassword5" class="form-label">Tên Phòng:</label>
                    <input type="text" id="inputPassword5" name="name_rom" class="form-control"
                        aria-describedby="passwordHelpBlock"
                        value="<?php if(isset($name_rom) && ($name_rom!='') ) echo $name_rom?>">
                    <label for="inputPassword5" class="form-label">Giá Phòng:</label>
                    <input type="text" id="inputPassword5" name="price_rom" class="form-control"
                        aria-describedby="passwordHelpBlock"
                        value="<?php if(isset($price_rom) && ($price_rom!='') ) echo $price_rom?>">
                    <label for="inputPassword5" class="form-label">Hình phòng:</label>
                    <input type="file" id="inputPassword5" name="image_rom" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập danh mục...">
                </div>
                <!-- <div class="col">
                    <label for="inputPassword5" class="form-label">Tên phòng đơn:</label>
                    <input type="text" id="inputPassword5" name="price_rom_d" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập giá...">
                    <label for="inputPassword5" class="form-label">Tên phòng đôi:</label>
                    <input type="text" id="inputPassword5" name="price_rom_dd" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập giá...">
                    <label for="inputPassword5" class="form-label">Mã phòng:</label>
                    <input type="text" id="inputPassword5" name="ma_rom" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập mã phòng...">

                </div> -->
                <div class="col">
                    <label for="inputPassword5" class="form-label">Danh mục:</label>
                    <select class="form-select" name="id_menu" aria-label="Default select example">
                        <?php
                            $load_dm_ud=load_dm_phong_ud();
                foreach ( $load_dm_ud as $hello) {
                    extract($hello);
                    $tr='<option value="'.$id_menu.'">'.$name_menu.'</option>';
                    echo $tr;
                }   
                ?> </select>

                    <label for="inputPassword5" class="form-label">Điểm đến:</label> <select class="form-select"
                        name="id_des" aria-label="Default select example">
                        <?php
                 $load_all_des=load_all_des();
                foreach ( $load_all_des as $hello) {
                    extract($hello);
                    $tr='<option value="'.$id_des.'">'.$name_des.'</option>';
                    echo $tr;
                }   
            
                ?> </select>
                    <label for="inputPassword5" class="form-label">Mã phòng:</label>
                    <input type="text" id="inputPassword5" name="ma_rom" class="form-control"
                        aria-describedby="passwordHelpBlock"
                        value="<?php if(isset($ma_rom) && ($ma_rom!='') ) echo $ma_rom?>">


                </div>
            </div>
            <div class="row">
                <div class="col text-center py-4">
                    <input type="hidden" name="id_rom" value="<?php if(isset($id_rom) && ($id_rom>0) ) echo $id_rom?>">

                    <a href="index.php?admin=ds_rom"> <button type="button" name="ds_phong" class="btn btn-warning">Danh
                            sách</button></a>
                    <input type="submit" class="btn btn-secondary" name="up_rom" value="Cập nhật">
                </div>
            </div>
        </form>
    </div>
</div>
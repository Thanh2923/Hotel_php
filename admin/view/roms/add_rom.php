<?php  session_start()
   
?>

<div class="admin-content">
    <div class="tiled">
        <h3>THÊM PHÒNG ƯA ĐÃI - COMBO</h3>
    </div>

    <div class="container my-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row ">
                <div class="col">
                    <label for="inputPassword5" class="form-label">Tên Phòng:</label>
                    <input required type="text" id="inputPassword5" name="name_rom" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập tên phòng...">
                    <label for="inputPassword5" class="form-label">Giá Phòng:</label>
                    <input required type="text" id="inputPassword5" name="price_rom" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập giá...">
                    <label for="inputPassword5" class="form-label">Hình phòng:</label>
                    <input required type="file" id="inputPassword5" name="image_rom" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập danh mục...">
                </div>
                <!-- <div class="col">
                    <label for="inputPassword5" class="form-label">Tên phòng đơn:</label>
                    <input required type="text" id="inputPassword5" name="price_rom_d" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập giá...">
                    <label for="inputPassword5" class="form-label">Tên phòng đôi:</label>
                    <input required type="text" id="inputPassword5" name="price_rom_dd" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập giá...">
                    <label for="inputPassword5" class="form-label">Mã phòng:</label>
                    <input required type="text" id="inputPassword5" name="ma_rom" class="form-control"
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
                    <input required type="text" id="inputPassword5" name="ma_rom" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập mã phòng...">


                </div>
            </div>
            <div class="row">
                <div class="col text-center py-4">
                    <button type="submit" class="btn btn-primary" name="add_rom">Thêm mới</button>
                    <a href="index.php?admin=ds_rom"> <button type="button" name="ds_phong" class="btn btn-warning">Danh
                            sách</button></a>
                    <button type="submit" class="btn btn-secondary">Nhập lại</button>
                </div>
            </div>
        </form>
    </div>
</div>
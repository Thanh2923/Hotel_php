<?php  


if(is_array($load_rom_id_des)){
    extract($load_rom_id_des);
}
   
?>


<div class="admin-content">
    <div class="tiled">
        <h3>CẬP NHẬT ĐIỂM ĐẾN</h3>
    </div>

    <div class="container my-5">
        <form action="index.php?admin=up_des" method="post" enctype="multipart/form-data">
            <div class="row ">
                <div class="col">
                    <label for="inputPassword5" class="form-label">Name des:</label>
                    <input type="text" id="inputPassword5" name="name_des" class="form-control"
                        aria-describedby="passwordHelpBlock"
                        value="<?php if(isset($name_des) && ($name_des!='') ) echo $name_des?>">

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label for="inputPassword5" class="form-label">Image des:</label>
                    <input type="file" id="inputPassword5" name="image_des" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập danh mục...">

                </div>
            </div>

            <div class="row">
                <div class="col py-3">
                    <select class="form-select" name="id_dm" aria-label="Default select example">
                        <?php
                            $load_dm_ud=load_dm_phong_dd();
                foreach ( $load_dm_ud as $hello) {
                    extract($hello);
                    $tr='<option value="'.$id_menu.'">'.$name_menu.'</option>';
                    echo $tr;
                }   
            
                ?>


                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col text-center py-4">
                    <input type="hidden" name="id_des" value="<?php if(isset($id_des) && ($id_des>0) ) echo $id_des?>">

                    <a href="index.php?admin=ds_des"> <button type="button" name="ds_des" class="btn btn-warning">Danh
                            sách</button></a>
                    <input type="submit" name="up_des" value="Cập Nhật" class="btn btn-secondary">
                </div>
            </div>
        </form>
    </div>
</div>
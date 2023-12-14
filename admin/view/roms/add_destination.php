<div class="admin-content">
    <div class="tiled">
        <h3>THÊM PHÒNG ĐIỂM ĐẾN</h3>
    </div>

    <div class="container my-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row ">
                <div class="col">
                    <label for="inputPassword5" class="form-label">Name des:</label>
                    <input required type="text" id="inputPassword5" name="name_des" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập tên phòng...">

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <label for="inputPassword5" class="form-label">Image des:</label>
                    <input required type="file" id="inputPassword5" name="image_des" class="form-control"
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
                    <button type="submit" class="btn btn-primary" name="add_des">Thêm mới</button>
                    <a href="index.php?admin=ds_des"> <button type="button" name="ds_des" class="btn btn-warning">Danh
                            sách</button></a>
                    <button type="submit" class="btn btn-secondary">Nhập lại</button>
                </div>
            </div>
        </form>
    </div>
</div>
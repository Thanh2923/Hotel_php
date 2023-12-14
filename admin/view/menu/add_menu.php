<div class="admin-content">
    <div class="tiled">
        <h3>DANH MỤC PHÒNG</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <label for="inputPassword5" class="form-label"></label>
                    <input type="button" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                        style="background-color:yellowgreen;">
                    <label for="inputPassword5" class="form-label"></label>
                    <input required type="text" id="inputPassword5" name="dmphong" class="form-control"
                        aria-describedby="passwordHelpBlock" placeholder="Nhập danh mục...">
                    <div class="row">
                        <div class="col pt-3">
                            <span><?php  if(isset($tb) && ($tb!='') ) echo $tb?></span>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="add_dmphong">Thêm mới</button>
                    <a href="index.php?admin=ds_phong"> <button type="button" name="ds_phong"
                            class="btn btn-warning">Danh
                            sách</button></a>
                    <button type="submit" class="btn btn-secondary">Nhập lại</button>
                </form>
            </div>
        </div>
    </div>

</div>
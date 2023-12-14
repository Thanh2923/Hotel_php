<?php  
   if(isset($load_menu_id_menu)){
    extract($load_menu_id_menu);
   }
 
?>

<div class="admin-content">
    <div class="tiled">
        <h3>CẬP NHẬT DANH MỤC PHÒNG</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="index.php?admin=up_menu" method="post">
                    <label for="inputPassword5" class="form-label"></label>
                    <input type="button" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
                        style="background-color:yellowgreen;">
                    <label for="inputPassword5" class="form-label"></label>
                    <input type="text" id="inputPassword5" name="name_menu" class="form-control"
                        aria-describedby="passwordHelpBlock"
                        value="<?php if(isset($name_menu)&& ($name_menu!='')) echo $name_menu;?>">
                    <br>
                    <input type="hidden" name="id_menu"
                        value="<?php  if(isset($id_menu)&& ($id_menu>0))  echo $id_menu?>">

                    <a href="index.php?admin=ds_phong"> <button type="button" name="ds_phong"
                            class="btn btn-warning">Danh
                            sách</button></a>
                    <input type="submit" name="up_menu" value="Cập nhật" class="btn btn-secondary">
                </form>
            </div>
        </div>
    </div>

</div>
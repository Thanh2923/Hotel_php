<div class="admin-content">
    <div class="tiled">
        <h3>CẬP NHẬT TIN TỨC</h3>
    </div>


    <div class="container">
        <div class="row my-5 ">
            <div class="col-8 m-auto">
                <?php if(is_array($load_tt_up)){

                    extract($load_tt_up);
                }?>
                <form action="index.php?admin=up_tintuc" method="post" enctype="multipart/form-data">
                    <div class="col-12 ">
                        <label for="inputPassword5" class="form-label">Tiêu Đề:</label>
                        <input required type="text" id="inputPassword5" name="title" class="form-control"
                            value="<?php if(isset($title)&& ($title!='')) echo $title;?>"
                            aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword5" class="form-label">Tiêu đề phụ:</label>
                        <input required type="text" id="inputPassword5" name="subtitle" class="form-control"
                            value="<?php if(isset($title_sub)&& ($title_sub!='')) echo $title_sub;?>"
                            aria-describedby="passwordHelpBlock">
                    </div>
                    <div class="col-12">
                        <label for="inputPassword5" class="form-label">Hình ảnh:</label>
                        <input required type="file" id="inputPassword5" name="image_rom" class="form-control"
                            aria-describedby="passwordHelpBlock" placeholder="Nhập danh mục...">
                        <img style="width:100px; height:100px"
                            src="../uploads/<?php if(isset($image_news)&& ($image_news!='')) echo $image_news;?>"
                            alt="">

                    </div>

                    <div class="col-12">
                        <label for="checkin" class="form-label">Ngày đăng tin:</label>
                        <input required class="form-control" type="date" id="checkin" name="date"
                            value="<?php echo $date ;?>" required>

                    </div>
                    <div class="row">
                        <div class="col py-3">
                            <select class="form-select" name="id_dm" aria-label="Default select example">
                                <?php
                            $load_dm_ud=load_dm_phong_tt();
                foreach ( $load_dm_ud as $hello) {
                    extract($hello);
                    $tr='<option value="'.$id_menu.'">'.$name_menu.'</option>';
                    echo $tr;
                }   
            
                ?>


                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="inputPassword5" class="form-label">Nội dung:</label>
                        <textarea required id="largeTextBox" name="content"
                            placeholder="Type your content here..."> <?php if(isset($content_news)&& ($content_news!='')) echo htmlspecialchars($content_news)?></textarea>
                    </div>


                    <input type="hidden" name="id_news"
                        value="<?php if(isset($id_news)&& ($id_news!='')) echo $id_news;?>">
                    <div class="col-12 text-center">
                        <input type="submit" style="width: 20%;" class="btn btn-warning" value="Cật nhật"
                            name="up_tintuc">
                        <a href="index.php?admin=ds_tt"> <input type="button" style="width: 20%;"
                                class="btn btn-primary" value="Danh sách" name="tintuc"></a>
                    </div>





                </form>
            </div>
        </div>
    </div>
    </body>
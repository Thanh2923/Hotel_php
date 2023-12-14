<div class="container combo-p">
    <div class="row text-center py-5">
        <h3>COMBO GIÁ TỐT</h3>
    </div>
    <div class="row mb-5">
        <?php

        
         $sql= "Select * from roms where id_menu_r=16 ORDER BY id_rom desc ";
         $result= pdo_query( $sql );
         foreach ($result as $load_rom) {
          $img_path="./uploads/";
          extract($load_rom);
          $img=$img_path.$image_rom;
          $tr ='<div class="col">   <a class="text-decoration-none" href="index.php?action=ctdatphong&id_rom='.$id_rom.'">
          <div class="col-img">
              <img src="'.$img.'" alt="">
          </div>
          <div class="name-img">
              <h6>'.$name_rom.'</h6>
          </div>
          <span class="price">
          '.number_format($price_rom, 0, ".", ".").' VNĐ
          </span>
    </a>  </div>'; echo $tr;
        }
        ?>
        <!-- <div class="col">
            <div class="col-img">
                <img src="./images/cb1.jpg" alt="">
            </div>
            <div class="name-img">
                <h6>Combo nghỉ dưỡng 4N3Đ tại Đà Nẵng - Hội An (2 Đêm tại Đà Nẵng + 1 Đêm tại Hội An)</h6>
            </div>
            <span class="price">
                4,200,000 VNĐ
            </span>
        </div>
        <div class="col">
            <div class="col-img">
                <img src="./images/cb2.jpg" alt="">
            </div>
            <div class="name-img">
                <h6>Combo nghỉ dưỡng 4N3Đ tại Đà Nẵng - Hội An (1 Đêm tại Đà Nẵng + 2 Đêm tại Hội An)</h6>
            </div>
            <span class="price">
                4,200,000 VNĐ
            </span>
        </div>
        <div class="col">
            <div class="col-img">
                <img src="./images/cb3.jpg" alt="">
            </div>
            <div class="name-img">
                <h6>Combo nghỉ dưỡng 3N2Đ tại Đà Nẵng - Hội An</h6>
            </div>
            <span class="price">
                3,200,000 VNĐ
            </span>
        </div> -->

    </div>

</div>
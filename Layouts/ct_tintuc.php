<style>
.list-link {
    background-color: #f5f5f5;

}



.container2 {
    width: 100%;
    height: 30px;
}
</style>

<?php if(isset($load_one_tt)) 
                $img_path="./uploads/";
                extract($load_one_tt);
                $img=$img_path.$image_news;
                echo '<div class="container2 ">
                <div class="row ">
                    <div class="col list-link">
                        <ul class="d-flex">
                            <li class="pe-2 "><a class="text-decoration-none " href="">Home</a></li> >
                            <li class="pe-2 "><a class="text-decoration-none" href="">Tin tin</a></li> >
                            <li class="pe-2 "><a class="text-decoration-none" href="">Tin tức du lịch</a></li> >
                            <li class="pe-2 "><a class="text-decoration-none" href="">'.$title.'</a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row my-4">
                    <div class="col-12">
                        <h3>'.$title.'</h3>
                    </div>
                    <div class="col-12 pt-2">
                        <div class="row">
                            <div class="col-2">Tin tức du lịch</div>
                            <div class="col-3">'.$date.'</div>
                        </div>
                    </div>
            
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                        <h6>'.$title_sub.'</h6>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-8 m-auto">
                        <img src="'.$img.'" style="width:800px; height:400px" alt="">
                    </div>
                </div>
                <div class="row">
                    <p>'.$content_news.'</p>
                </div>
            
            </div>';

                ?>
<div class="container">

    <div class="row text-center py-5">
        <h3>TIN TỨC TƯƠNG TỰ</h3>
    </div>

    <div class="row my-5">

        <?php
$per_page=4;
$offset=4;
$sql="select * from news order by id_news desc limit $per_page offset $offset ";
$load_tt=pdo_query($sql); 
foreach ($load_tt as $load) {
$img_path="./uploads/";
extract($load);
$img=$img_path.$image_news;
echo ' <div class="col-3 icon-link-hover"">
<a class="text-decoration-none black-text" href="index.php?action=ct_tintuc&id_news='.$id_news.'"> <div class="row ttnb">
<div class="col-12">
    <img src="'.$img.'" style="width: 100%; height:150px" alt="">
</div>
<div class="col-12 tt">
    <p>'.$date.' - '.$date.' </p>
</div>
<div class="col-12 tt">
    <h6>'.$title.'</h6>
</div>
</div></a>
</div>';
}

?>
        <!-- <div class="col-3">
<div class="row">
    <div class="col-12">
        <img src="./images/banne1.jpg" style="width: 100%; height:150px" alt="">
    </div>
    <div class="col-12">
        <p>20-1003-2003 - 20-1003-2003 </p>
    </div>
    <div class="col-12">
        <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
    </div>
</div>
</div>
<div class="col-3">
<div class="row">
    <div class="col-12">
        <img src="./images/banne1.jpg" style="width: 100%; height:150px" alt="">
    </div>
    <div class="col-12">
        <p>20-1003-2003 - 20-1003-2003 </p>
    </div>
    <div class="col-12">
        <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
    </div>
</div>
</div>
<div class="col-3">
<div class="row">
    <div class="col-12">
        <img src="./images/banne1.jpg" style="width: 100%; height:150px" alt="">
    </div>
    <div class="col-12">
        <p>20-1003-2003 - 20-1003-2003 </p>
    </div>
    <div class="col-12">
        <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
    </div>
</div>
</div>
<div class="col-3">
<div class="row">
    <div class="col-12">
        <img src="./images/banne1.jpg" style="width: 100%; height:150px" alt="">
    </div>
    <div class="col-12">
        <p>20-1003-2003 - 20-1003-2003 </p>
    </div>
    <div class="col-12">
        <h6>DU LỊCH QUẢNG NINH: KHAI PHÁ TIỀM NĂNG VÀ PHÁT TRIỂN CƠ HỘI</h6>
    </div>
</div>
</div> -->

    </div>
</div>
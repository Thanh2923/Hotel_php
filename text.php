<?php  
include './Layouts/header.php';
include './model/config.php';
include './model/roms/rom.php';

$per_page =!empty($_GET['pre_page']) ? $_GET['pre_page'] : 6;
$page=!empty($_GET['page']) ? $_GET['page'] : 1;
$offset =($page-1) * $per_page;
$sql="select * from roms where id_menu_r=15 limit  $per_page  offset $offset ";
$result =pdo_query($sql);

$sqlr = "SELECT * FROM roms where id_menu_r= 15 ";
// Thực thi truy vấn
$resultr = $conn->query($sqlr);
 $totalRows = $resultr->num_rows;
$tatal_page =ceil($totalRows / $per_page);
?>

<main>
    <div class="container uadai-he">
        <div class="row text-center py-5">
            <h3>ƯA ĐÃI - KHUYẾN MÃI</h3>
        </div>
        <div class="row">

            <?php  
                  
                   foreach ($result as $load_rom) {
                    $img_path="./uploads/";
                    extract($load_rom);
                    


                    $img=$img_path.$image_rom;
                    $tr='<div class="col-4 mb-5">
                    <a class="text-decoration-none" href="index.php?action=ctdatphong&id_rom='.$id_rom.'">
                    
                    <div class="col-img">
                        <img src="'.$img.'" alt="">
                    </div>
                    <div class="name-img">
                        <h6>'.$name_rom.'</h6>
                    </div>
                    <span class="price">
                    '.number_format($price_rom, 0, ".", ".").' VNĐ
                    </span>
                  


                    </a>
        </div>
        '; echo $tr;
       }
        ?>


        </div>

    </div>




    <div class="contaner">
        <div class="row my-5">

            <div class="col text-center">

                <?php if($page >1 ) {  $prev_page= $page-1;?>

                <a href="?pre_page=<?=$per_page?>&page=<?=$prev_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-left" style="color: #ffbb00;"></i></a>

                <?php }?>
                <?php for ($num=1 ; $num <= $tatal_page ; $num++) { 
        
        ?>
                <?php if($page != $num) {?>
                <?php if($num > $page - 3 && $num < $page +3 ) {?>
                <a href="?pre_page=<?=$per_page?>&page=<?=$num?>" class="btn btn-light"><?=$num?></a>
                <?php }?>
                <?php } else {?>
                <strong class="btn btn-warning"><?=$num?></strong>
                <?php }?>

                <?php }?>
                <?php if($page > $totalRows-12 ) {  $next_page= $page+1;?>

                <a href="?pre_page=<?=$per_page?>&page=<?=$next_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-right" style="color: #ffbb00;"></i></a>

                <?php }?>
            </div>

        </div>
    </div>

</main>
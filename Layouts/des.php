<main>
    <div class="container dd-nbat">
        <div class="row text-center py-5">
            <h3>ĐIỂM ĐẾN NỔI BẬT</h3>
        </div>
        <div class="row mb-5">
            <?php  
                 $per_page = 6;
                 $page=!empty($_GET['page']) ? $_GET['page'] : 1;
                 $offset =($page-1) * $per_page;
                 $sql="select * from destination  order by id_des limit  $per_page  offset $offset ";
                 $result =pdo_query($sql);
                 
                 $sqlr = "SELECT * FROM destination ";
                 // Thực thi truy vấn
                 $resultr = $conn->query($sqlr);
                  $totalRows = $resultr->num_rows;
                 $tatal_page =ceil($totalRows / $per_page);
                $path_img="./uploads/";

                foreach ( $result as $dd) {
                    extract($dd);
                    $img=$path_img . $image_des;
                    $tr='<div class="col-4 img-des pb-3 space">
                    <img src="'.$img.'" style="width:100%; height:250px" alt="">
                    <div class="tidel-des">
                    <h3> <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> '.$name_des.'</h3>
                </div>
                </div>';echo $tr;
                }

               
               ?>


            <!-- <div class="col-4 img-des space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
                <div class="tidel-des">

                    <h3> <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> Hồ Chính Minh</h3>
                </div>
            </div>
            <div class="col-4  space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
            </div>
            <div class="col-4  space">
                <img src="./images/hcm.jpg" style="width:100%; height:250px" alt="">
            </div> -->

        </div>
    </div>

    <div class="contaner">
        <div class="row my-5">

            <div class="col text-center">

                <?php if($page >1 ) {  $prev_page= $page-1;?>

                <a href="index.php?action=des&page=<?=$prev_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-left" style="color: #ffbb00;"></i></a>

                <?php }?>
                <?php for ($num=1 ; $num <= $tatal_page ; $num++) { 
        
        ?>
                <?php if($page != $num) {?>
                <?php if($num > $page - 3 && $num < $page +3 ) {?>
                <a href="index.php?action=des&page=<?=$num?>" class="btn btn-light"><?=$num?></a>
                <?php }?>
                <?php } else {?>
                <strong class="btn btn-warning"><?=$num?></strong>
                <?php }?>

                <?php }?>
                <?php if($page < $totalRows-9 ) {  $next_page= $page+1;?>

                <a href="index.php?action=des$page=<?=$next_page?>" class="btn btn-light"><i
                        class="fa-solid fa-chevron-right" style="color: #ffbb00;"></i></a>

                <?php }?>
            </div>

        </div>
    </div>

</main>
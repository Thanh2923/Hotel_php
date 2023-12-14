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
            <?php if($page < $tatal_rom-1 ) {  $next_page= $page+1;?>

            <a href="?pre_page=<?=$per_page?>&page=<?=$next_page?>" class="btn btn-light"><i
                    class="fa-solid fa-chevron-right" style="color: #ffbb00;"></i></a>

            <?php }?>
        </div>

    </div>
</div>
<?php     
    

    $sql="Select menu.name_menu as name_menu , sum(quantity) as ctsl ,  sum(sum) as sumprice, min(sum) as minprice, max(sum) as maxprice  ";
    $sql.="from hoa_don left join menu on menu.id_menu=hoa_don.id_menu_hd ";
    $sql.="group by menu.id_menu asc ";
     $result=pdo_query($sql);
    
     var_dump($result);


?>

<style>
.tdt {
    background-color: white;
    box-shadow: 0px 0px 5px darkgray;
}

.tdt span {
    color: black;
    font-size: 20px;
    font-weight: 700;
}

.loai_p {
    background-color: dodgerblue;
    width: 90%;
    padding: 10px 0;
    color: white;
    text-align: center;
}

.name_span {
    width: 90%;
    box-shadow: 0px 0px 1px black;
    padding: 30px;
}
</style>

<div class="admin-content">
    <div class="tiled">
        <h3>THỐNG KÊ</h3>
    </div>

    <div class="container my-5">
        <?php
        
                    $tatal=0;
                     foreach ($result as $load) {
                       extract($load);
                       $tatal+=$sumprice;
                       
                     
                     
                   ?>
        <div class="row my-5 justify-content-between">
            <div class="col-2">
                <h6 class="loai_p">Phòng</h6>
                <div class="name_span text-center">
                    <span><?=$name_menu?></span>
                </div>

            </div>
            <div class="col-2">
                <h6 class="loai_p">Số lượng ĐP</h6>
                <div class="name_span text-center">
                    <span><?=$ctsl?></span>
                </div>
            </div>
            <div class="col-2">
                <h6 class="loai_p">Giá thấp nhất</h6>
                <div class="name_span text-center">
                    <span>
                        <?=number_format($minprice, 0, ".", ".")?>
                    </span>
                </div>
            </div>
            <div class="col-2">
                <h6 class="loai_p">Giá cao nhất</h6>
                <div class="name_span text-center">
                    <span> <?=number_format($maxprice, 0, ".", ".")?></span>
                </div>
            </div>
            <div class="col-2">
                <h6 class="loai_p">Tổng tiền</h6>
                <div class="name_span text-center">
                    <span> <?=number_format($sumprice, 0, ".", ".")?></span>
                </div>
            </div>
        </div>


        <?php }?>
    </div>




    <div class="container">
        <div class="row my-5 justify-content-center ">
            <div class="col-5 tdt py-3 text-center">
                <span>Tổng danh thu : <?php if(isset($tatal)) echo number_format($tatal, 0, ".", ".") ?> VNĐ
                </span>
            </div>
        </div>
    </div>
</div>

</div>


</div>

</div>
<?php 

function load_hoadon(){
    $sql= "select * from hoa_don order by id_hd desc ";
    $resul= pdo_query($sql);
    return $resul;
 }
 function load_hoadon_email($email){
    $sql= "select * from hoa_don where email='$email'  ";
    $resul= pdo_query($sql);
    return $resul;
 }

?>
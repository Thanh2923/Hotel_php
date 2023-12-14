<?php 
 function load_phong_da_dat(){
    $sql= "select * from book_rom order by id_book_rom desc ";
    $resul= pdo_query($sql);
    return $resul;
 }

 function load_phong_dadat_email($email){
   $sql= "select * from book_rom where email='$email' ";
   $resul= pdo_query($sql);
   return $resul;
}
function load_phong_dadat_email_tc($email){
   $sql= "select * from hoa_don where email='$email' ";
   $resul= pdo_query($sql);
   return $resul;
}


 function delete_bookrom(){
   $sql = "delete from book_rom where id_book_rom=".$_GET['id_book_rom'];
   pdo_execute($sql);
}




?>
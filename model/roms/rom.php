<?php

    function into_roms($name_rom,$price_rom,$image_rom,$ma_rom,$id_menu,$id_des){
        $sql="insert into roms(name_rom,price_rom,image_rom,ma_rom,id_menu_r,id_des_a) values('$name_rom','$price_rom','$image_rom','$ma_rom','$id_menu','$id_des')";
        pdo_execute($sql);
        }
        function into_type($name_type,$img){
            $sql="insert into type_rom(name_type,img) values('$name_type','$img')";
            pdo_execute($sql);

        }
        function load_all_tpye() {
            $sql= "Select name_type from type_rom where id_type";
            $result= pdo_query( $sql );
            return $result;
        }
       
    // function update_rom($name_rom,$price_rom,$image_rom,$name_rom_d,$price_rom_d,$image_rom_d,$name_rom_dd,$price_rom_dd,$image_rom_dd,$id_rom){
    //     $sql= "update roms set name_rom='".$name_rom."',price_rom='".$price_rom."', image_rom='".$image_rom."',name_rom_d='".$name_rom_d."',price_rom_d='".$price_rom_d."', image_d='".$image_rom_d."',name_rom_dd='".$name_rom_dd."',price_rom_dd='".$price_rom_dd."', image_dd='".$image_rom_dd."' where id_rom=.$id_rom";
    //     pdo_execute($sql);
    // }
    // function delete_rom() {
    //     $sql = "delete from roms where id_rom=".$_GET['id_rom'];
    //     pdo_execute($sql);
    //  }
    function load_all_rom() {
        $sql= "Select * from roms order by id_rom desc";
        $result= pdo_query( $sql );
        return $result;
    }

   
    
    

    function load_one_rom($id_rom) {
        $sql = "select * from roms where id_rom=".$id_rom;
        $dm = pdo_query_one($sql);
        return $dm; 
    }


    
    function check_date($id_rom){
        $sql= "SELECT * from book_rom where id_rom_t='$id_rom'";
$resul= pdo_query_one($sql);
        return $resul;  
     }

     function load_book_rom($email){
        $sql= "select * from book_rom where email='$email' and order by id_book_rom desc ";
        $resul= pdo_query_one($sql);
        return $resul;  
     }

     function delete_rom(){
        $sql = "delete from roms where id_rom=".$_GET['id_rom'];
        pdo_execute($sql);
    }


    function suaid_rom(){
        $sql="select * from roms where id_rom=".$_GET['id_rom'];
        $result=pdo_query_one($sql);
        return $result;
    }

    function up_rom($name_rom,$price_rom,$image_rom,$ma_rom,$id_menu_r,$id_des_a,$id_rom){
        $sql="update roms set name_rom='".$name_rom."',price_rom='".$price_rom."',image_rom='".$image_rom."', id_menu_r='".$id_menu_r."', id_des_a='".$id_des_a."' where id_rom=".$id_rom ;
        pdo_execute($sql);
    }





?>
<?php
 function into_destination($name_des,$image_des,$id_dm){
    $sql= "insert into destination(name_des,image_des,id_dm) values('$name_des','$image_des','$id_dm')";
    pdo_execute($sql);
}

function load_all_des() {
    $sql= "Select * from destination order by id_des desc";
    $result= pdo_query( $sql );
    return $result;
}
function load_six_des() {
    $sql= "Select * from destination order by id_des desc limit 6";
    $result= pdo_query( $sql );
    return $result;
}
function load_des_ctphong($id_rom) {
    $sql="SELECT *
    FROM destination
    JOIN roms ON id_des = id_des_a
           WHERE id_rom = $id_rom";
     $result=pdo_query_one($sql);
     return $result;
 }


 function delete_des(){
    $sql = "delete from destination where id_des=".$_GET['id_des'];
    pdo_execute($sql);
}


function suaid_des(){
    $sql="select * from destination where id_des=".$_GET['id_des'];
    $result=pdo_query_one($sql);
    return $result;
}

function up_des($name_des,$image_des,$id_dm,$id_des){
    $sql="update destination set name_des='".$name_des."',image_des='".$image_des."', id_dm='".$id_dm."' where id_des=".$id_des;
    pdo_execute($sql);
}



?>
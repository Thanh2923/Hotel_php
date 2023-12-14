<?php  
function load_one_tpye_don () {
    $sql= "Select * from type_rom order by id_type asc";
    $result= pdo_query_one( $sql );
    return $result;
}
function load_one_tpye_doi() {
    $sql= "Select * from type_rom order by id_type desc";
    $result= pdo_query_one( $sql );
    return $result;
}

?>
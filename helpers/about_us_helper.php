<?php 

function getAboutUs($id){
    $resultado = selectSQL("SELECT * FROM about_us WHERE id=$id");
    return $resultado;
}

function getTitleAbout (){
    $result = selectSQLUnico("SELECT about_title FROM about_us WHERE id=1");
    return $result["about_title"];
}

function getImgAbout (){
    $result = selectSQLUnico("SELECT about_img FROM about_us WHERE id=1");
    return $result["about_img"];
}

function getTextAbout (){
    $result = selectSQLUnico("SELECT about_text FROM about_us WHERE id=1");
    return $result["about_text"];
}

function getTextAboutMobile (){
    $result = substr(getTextAbout(), 0, 1000) . "...";
    return $result;
}

?>
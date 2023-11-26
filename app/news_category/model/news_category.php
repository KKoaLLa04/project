<?php

function getAllNewsCate(){
    $sql = "SELECT * FROM news_category";
    $data = getRaw($sql);
    return $data;
}
function getNewsCateDetail($id){
    $sql = "SELECT * FROM news_category WHERE id=$id";
    $data =  firstRaw($sql);
    return $data;
}
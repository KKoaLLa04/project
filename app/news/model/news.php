<?php
function getAllnews(){
    $sql = "SELECT * FROM news order by id DESC";
    $data = getRaw($sql);
    return $data;
}
function getAllNewsCate(){
    $sql = "SELECT * FROM news_category";
    $data = getRaw($sql);
    return $data;
}
function getNewsDetail($id){
    $sql = "SELECT * FROM news WHERE id=$id";
    $data =  firstRaw($sql);
    return $data;
}

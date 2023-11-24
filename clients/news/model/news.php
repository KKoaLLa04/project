<?php
function getAllnews(){
    $sql = "SELECT news.*,news_category.title as title_cate FROM news INNER JOIN news_category ON news_category.id=news.news_id";
    $data = getRaw($sql);
    return $data;
}
function getAllNewsCate(){
    $sql = "SELECT * FROM news_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
// function getNewsDetail($id){
//     $sql = "SELECT news.*,news_category.title FROM news INNER JOIN news_category ON news_category.id=news.news_id WHERE news_category.id='$id' order by news_category.id DESC";
//     $data =  firstRaw($sql);
//     return $data;
// }

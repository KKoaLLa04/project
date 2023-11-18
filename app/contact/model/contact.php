<?php

function getAllContact(){
    $sql = "SELECT * FROM contact";
    $data = getRaw($sql);
    return $data;
}

function getContactDetail($id){
    $sql = "SELECT * FROM contact WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}
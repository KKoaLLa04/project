<?php

function getAllBill()
{
    $sql = "SELECT * FROM bill ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getBillDetail($id)
{
    $sql = "SELECT * FROM bill WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}

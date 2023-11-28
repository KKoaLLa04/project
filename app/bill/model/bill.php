<?php

function getAllBill($filter = '')
{
    $sql = "SELECT * FROM bill ";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $sql .= " ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}

function getBillDetail($id)
{
    $sql = "SELECT * FROM bill WHERE id=$id";
    $data = firstRaw($sql);
    return $data;
}


function getCartToBill($code)
{
    $sql = "SELECT * FROM cart WHERE code_id=$code";
    $data = getRaw($sql);
    return $data;
}

function getBillCode($code)
{
    $sql = "SELECT * FROM bill WHERE code=$code";
    $data = firstRaw($sql);
    return $data;
}
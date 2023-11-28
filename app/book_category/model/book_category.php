<?php

function getAllBookCate($filter = '')
{
    $sql = "SELECT * FROM book_category";

    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}
function getBookCateDetail($id)
{
    $sql = "SELECT * FROM book_category WHERE id=$id";
    $data =  firstRaw($sql);
    return $data;
}

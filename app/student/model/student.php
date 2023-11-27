<?php

function getAllStudent($filter = '')
{
    $sql = "SELECT * FROM student WHERE 1 ";
    if (!empty($filter)) {
        $sql .= " $filter";
    }
    $data = getRaw($sql);
    return $data;
}

function checkEmailExist($email)
{
    $sql = "SELECT * FROM student WHERE email='$email'";
    $data = getRows($sql);
    return $data;
}

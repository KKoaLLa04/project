<?php

function getAllModule($subject_id = '')
{
    $sql = "SELECT module.*, course.title as course_title FROM module INNER JOIN course ON module.course_id = course.id";
    if (!empty($subject_id)) {
        $sql .= " WHERE course_id = $subject_id";
    }
    $data = getRaw($sql);
    return $data;
}

function getAllCourse()
{
    $sql = "SELECT * FROM course ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}


function getModuleDetail($id)
{
    $sql = "SELECT * FROM module WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

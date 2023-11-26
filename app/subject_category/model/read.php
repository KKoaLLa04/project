<?php

function getAllCate()
{
    $sql = "SELECT * FROM course_category";
    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " WHERE teacher_id=$id";
        }
    }
    $data = getRaw($sql);
    return $data;
}

function getDetailCate($id)
{
    $sql = "SELECT * FROM course_category WHERE id=$id";
    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " AND teacher_id=$id";
        }
    }
    $data = firstRaw($sql);
    return $data;
}

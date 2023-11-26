<?php

function getAllCourse($cate_id = '')
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id";
    if (!empty($cate_id)) {
        $sql .= " WHERE cate_id=$cate_id";
    }

    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            if (empty($cate_id)) {
                $sql .= " WHERE course.teacher_id=$id";
            } else {
                $sql .= " AND course.teacher_id=$id";
            }
        }
    }

    $sql .= " ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllTeacher()
{
    $sql = "SELECT * FROM teacher";
    if (isLoginTeacher()) {
        $id = isLoginTeacher()['id'];
        $group_id = isLoginTeacher()['group_id'];
        if ($group_id !== 1 && $group_id !== 2) {
            $sql .= " WHERE id=$id";
        }
    }
    $data = getRaw($sql);
    return $data;
}

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

function getCourseDetail($id)
{
    $sql = "SELECT * FROM course WHERE id = $id";
    $data = firstRaw($sql);
    return $data;
}

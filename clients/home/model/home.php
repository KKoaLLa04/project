<?php

function getAllCourse()
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}

function getAllCate()
{
    $sql = "SELECT * FROM course_category";
    $data = getRaw($sql);
    return $data;
}

function getAllCourseId($id)
{
    $sql = "SELECT course.*, fullname, course_category.title as cate_name FROM course INNER JOIN teacher ON teacher.id=course.teacher_id INNER JOIN course_category ON course_category.id=course.cate_id WHERE course.cate_id = '$id' ORDER BY course.cate_id DESC";
    $data = getRaw($sql);
    return $data;
}
function getAllBookCate()
{
    $sql = "SELECT * FROM book_category ORDER BY id DESC";
    $data = getRaw($sql);
    return $data;
}
function getAllBook()
{
    $sql = "SELECT book.*, book_category.title as title_cate FROM book INNER JOIN book_category ON book_category.id=book.book_id";
    $data = getRaw($sql);
    return $data;
}


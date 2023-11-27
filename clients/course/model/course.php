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

function getAllLesson()
{
    $sql = "SELECT * FROM lesson";
    $data = getRaw($sql);
    return $data;
}

function getCourseDetail($id)
{
    $sql = "SELECT lesson.*,module.title as module_name FROM course INNER JOIN module ON module.course_id = course.id INNER JOIN lesson ON lesson.module_id = module.id WHERE course.id = $id";
    $data = getRaw($sql);
    return $data;
}

function getModuleDetail($course_id)
{
    $sql = "SELECT * FROM module WHERE course_id=$course_id";
    $data = getRaw($sql);
    return $data;
}

function getLessonModule($module_id)
{
    $sql = "SELECT * FROM lesson WHERE module_id=$module_id";
    $data = getRaw($sql);
    return $data;
}

function getAllInfo($course_id)
{
    $sql = "SELECT *, count(course_id) as count_module FROM module WHERE course_id = $course_id GROUP BY course_id";
    $data = firstRaw($sql);
    return $data;
}

function selectCourse($course_id)
{
    $sql = "SELECT * FROM course WHERE id = $course_id";
    $data = firstRaw($sql);
    return $data;
}

function permissionCourse($course_id, $student_id)
{
    $sql = "SELECT * FROM code_course WHERE course_id=$course_id AND student_id=$student_id";
    $data = firstRaw($sql);
    return $data;
}

function courseInfo($id)
{
    $sql = "SELECT course.*, fullname FROM course INNER JOIN teacher ON teacher.id=course.teacher_id WHERE course.id=$id";
    $data = firstRaw($sql);
    return $data;
}

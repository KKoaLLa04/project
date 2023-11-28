<?php

require_once './clients/home/model/home.php';

// $course_detail = getAllCourse();
$course_category = getAllCate();
$course = [];
if (!empty($course_category)) {
    foreach ($course_category as $key => $item) {
        $course[$key] = getAllCourseId($item['id']);
    }
}

$course = array_filter($course);
// $course = array_values($course);

$data = [
    'course_category' => getAllCate(),
    'course_detail' => $course,
    'book_category' => getAllBookCate(),
    'book' => getAllBook(),
    'exam_category' => getAllCateexam(),
    'exam' => getAllExam(),
    'news_category' => getAllNewsCate(),
    'news' => getAllnews(),
    'category' => getAllDocCate(),
    'document' => getAllDoc(),
];


viewClient($data);

<?php

require_once './subject_category/model/cate_course.php';

$data = [
    'data' => getAllCate(),
    'title' => 'Danh sách danh mục các khóa học'
];

view($data);

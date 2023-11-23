<?php

require_once  "./subject/model/course.php";

$data = [
    'course' => getAllCourse()
];
view($data);
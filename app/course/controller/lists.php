<?php

require_once  "./course/model/course.php";

$data = [
    'course' => getAllCourse()
];
view($data);
<?php

require_once 'book/model/book.php';

$data = [
    'book' => getAllbook()
];
view($data);
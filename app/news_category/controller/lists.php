<?php

require_once 'news_category/model/news_category.php';

$data = [
    'news_category' => getAllNewsCate()
];
view($data);
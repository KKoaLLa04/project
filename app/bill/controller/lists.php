<?php

require_once './bill/model/bill.php';

$data = [
    'bill' => getAllBill(),
];

view($data);

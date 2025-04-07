<?php

$config = require('config.php');
$db = new Database($config['database']);

$groceries = $db->query("select * from groceries")->fetchAll();

//Declare total with array_reduce
// function totalAmount($total, $checkOut) {
//     return $total += $checkOut['subTotal'];
// }

// $total = array_reduce($checkOut, 'totalAmount', 0);





require 'views/index.view.php';
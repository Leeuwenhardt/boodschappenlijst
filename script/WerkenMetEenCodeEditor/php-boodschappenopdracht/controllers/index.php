<?php

$heading = 'Overzicht';

//Creating the array
$checkOut = [
    [
        'product' => 'Brood',
        'price' => 1.00,
        'amount' => 1,
        'subTotal' => 1.00,
    ],
    [
        'product' => 'Broccoli',
        'price' => 0.99,
        'amount' => 1,
        'subTotal' => 0.99,
    ],
    [
        'product' => 'Krentebollen',
        'price' => 1.20,
        'amount' => 1,
        'subTotal' => 1.20,
    ],
    [
        'product' => 'Noten',
        'price' => 2.99,
        'amount' => 1,
        'subTotal' => 2.99,
    ],
];

//Declare total with array_reduce
function totalAmount($total, $checkOut) {
    return $total += $checkOut['subTotal'];
}

$total = array_reduce($checkOut, 'totalAmount', 0);

// Call the correct php file :) (arrayarrayarrayarray)
require ("../views/index.view.php");


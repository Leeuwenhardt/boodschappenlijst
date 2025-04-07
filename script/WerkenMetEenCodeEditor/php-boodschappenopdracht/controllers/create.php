<?php

require 'Validator.php';

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    $validator = new Validator();

    if (! $validator->string($_POST['name'], 1, 50)) {
        $errors['name'] = "A name no more than 50 characters is required";
    }

    if (empty($errors)) {
    $db->query('INSERT INTO groceries(name, quantity, price) VALUES(:name, :quantity, :price)', [
        'name' => $_POST['name'],
        'quantity' => $_POST['quantity'],
        'price' => $_POST['price']
    ]);
    }
}

require 'views/create.view.php';
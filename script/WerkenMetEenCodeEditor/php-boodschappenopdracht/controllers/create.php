<?php

require 'Validator.php';

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    $validator = new Validator();
    // string validate
    if (! $validator->string($_POST['name'], 1, 50)) {
        $errors['name'] = "Product naam kan niet groter dan 50 karakters zijn";
    }

    // integer validate
    if (! $validator->integer($_POST['quantity'], 0, 99)) {
        $errors['quantity'] = "Aantal moet minstens 1 en maximaal 99 zijn";
    }

    // price validate
    if (! $validator->decimal($_POST['price'] ?? 0, 0.01)) {
        $errors['price'] = "Prijs moet groter zijn dan 0";
    }

    if (empty($errors)) {
    $db->query('INSERT INTO groceries(name, quantity, price) VALUES(:name, :quantity, :price)', [
        'name' => $_POST['name'],
        'quantity' => $_POST['quantity'],
        'price' => $_POST['price']
    ]);

    header("Location: /");
    exit();
    }
}

require 'views/create.view.php';
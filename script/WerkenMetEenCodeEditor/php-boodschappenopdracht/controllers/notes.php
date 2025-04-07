<?php

$config = require('config.php');
$db = new Database($config['database']);

dd($_GET['#']);

// $groceries = $db->query("select * from groceries")->fetchAll();
// $groceries = $db->query('select * from groceries where id = :id', ['id' => $_GET[$id]])->fetchAll();

require 'views/notes.view.php';

// $id = $_GET['id'];
// $query = "SELECT * FROM groceries where id = ?";

// $groceries = $db->query($query, [$id])->fetchAll();

// dd($posts);
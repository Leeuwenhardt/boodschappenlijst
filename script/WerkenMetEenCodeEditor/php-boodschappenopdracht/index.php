<?php

require 'functions.php';
require 'Database.php';
require 'router.php';

$config = require('config.php');
$db = new Database($config['database']);
$posts = $db->query("SELECT * FROM groceries")->fetchAll();

$id = $_GET['id'];
$query = "select * from posts where id = ?";

$posts = $db->query($query, [$id])->fetch();
dd($posts);

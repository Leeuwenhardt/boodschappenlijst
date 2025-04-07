<?php

$config = require('config.php');
$db = new Database($config['database']); 

$posts = $db->query('select * from groceries')->findOrFail();

$currentUserId = 1;

authorize($posts['user_id'] === $currentUserId);


require 'views/notes.view.php';
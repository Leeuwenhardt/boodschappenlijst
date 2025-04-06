<?php

$config = require('config.php');
$db = new Database($config['database']); 

$posts = $db->query('select * from notes where user_id = :user and id = :id', [
    'id' => $_GET(['id'])
    ])->findOrFail();

$currentUserId = 1;

authorize($posts['user_id'] === $currentUserId);


require 'views/notes.view.php';
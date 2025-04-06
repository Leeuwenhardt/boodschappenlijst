<?php

$posts = $db->query('select * from groceries where user_id = 1')->get();

require 'views/create.view.php';
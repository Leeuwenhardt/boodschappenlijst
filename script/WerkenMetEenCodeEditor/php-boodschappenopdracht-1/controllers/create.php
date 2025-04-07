<?php

$posts = $db->query('select * from groceries')->get();

require 'views/create.view.php';
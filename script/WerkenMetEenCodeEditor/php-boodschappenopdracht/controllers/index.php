<?php

$config = require('config.php');
$db = new Database($config['database']);

$groceries = $db->query("select * from groceries")->fetchAll();

require 'views/index.view.php';
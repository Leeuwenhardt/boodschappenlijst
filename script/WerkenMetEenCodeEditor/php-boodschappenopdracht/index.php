<?php

require ('functions.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

dd($uri);

dd(parse_url($uri));


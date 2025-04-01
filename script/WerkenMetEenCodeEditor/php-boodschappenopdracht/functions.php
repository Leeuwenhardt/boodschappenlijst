<?php 

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function urlIs($value) {
    $_SERVER['REQUEST_URI'] === $value;
}

// vetgedrukte pagina swaps, retourneer een boolean voor overeenkomst
// https://laracasts.com/series/php-for-beginners-2023-edition/episodes/14
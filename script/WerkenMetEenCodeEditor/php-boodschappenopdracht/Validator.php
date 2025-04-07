<?php

Class Validator {
    public function string($value, $min = 1, $max = INF) {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

}

// integer($value, $min)

// decimal($value, $min, $max)
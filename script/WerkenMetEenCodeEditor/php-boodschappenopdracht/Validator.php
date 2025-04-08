<?php

Class Validator {
    public function string($value, $min = 1, $max = INF) {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public function integer($value, $min = 1, $max = PHP_INT_MAX) {
        $value = (int)$value;
        return number_format($value) >= $min && number_format($value) <= $max;
    }

    public function decimal($value, $min = 0, $max = PHP_FLOAT_MAX) {
        $value = (float)$value;
        return $value >= $min && $value <= $max;
    }

}

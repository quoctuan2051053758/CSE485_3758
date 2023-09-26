<?php
function convertToUppercase($array) {
    return array_map('strtoupper', $array);
}

// Áp dụng cho mảng $arrs = ['1', 'b', 'c', 'd'];
$arrs = ['1', 'b', 'c', 'd'];
$result = convertToUppercase($arrs);
print_r($result);

// Áp dụng cho mảng $arrs = ['a', 0, null, false];
$arrs = ['a', 0, null, false];
$result = convertToUppercase($arrs);
print_r($result);
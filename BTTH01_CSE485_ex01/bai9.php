<?php
function convertToLowercase($array) {
    return array_map('strtolower', $array);
}

// Áp dụng cho mảng $arrs = ['1', 'B', 'C', 'E'];
$arrs = ['1', 'B', 'C', 'E'];
$result = convertToLowercase($arrs);
print_r($result);

// Áp dụng cho mảng $arrs = ['a', 0, null, false];
$arrs = ['a', 0, null, false];
$result = convertToLowercase($arrs);
print_r($result);
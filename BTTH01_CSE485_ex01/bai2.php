<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng']; 
$yeuThich = ['Anh', 'Sơn', 'Thẳng', 'tôi'];
$str = "Màu " . $arrs[1] . " là màu yêu thích của " .$yeuThich[0] . ", ";
$str .= "trắng là màu yêu thích của " . $yeuThich[1] . ", ";
$str .= "cam là màu yêu thích của " . $yeuThich[2] . ", ";
$str .= "còn màu yêu thích của tôi là màu " .$arrs[3];

echo $str;
?>

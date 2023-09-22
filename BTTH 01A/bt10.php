<?php
function chuyenKyTuHoaMang(&$arr) {
    foreach ($arr as &$value) {
        if (is_string($value)) {
            $value = strtoupper($value);
        }
    }
}
// Áp dụng hàm cho các mảng
$arr1 = ['a', 'b', 'ABC'];
chuyenKyTuHoaMang($arr1);
var_dump($arr1);

$arr2 = ['1', 'B', 'C', 'E'];
chuyenKyTuHoaMang($arr2);
var_dump($arr2);

$arr3 = ['a', 0, null, false];
chuyenKyTuHoaMang($arr3);
var_dump($arr3);
?>
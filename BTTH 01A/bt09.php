<?php
function chuyenKyTuThuongMang(&$arr) {
    foreach ($arr as &$value) {
        if (is_string($value)) {
            $value = strtolower($value);
        }
    }
}

// Áp dụng hàm cho các mảng
$arr1 = ['a', 'b', 'ABC'];
chuyenKyTuThuongMang($arr1);
var_dump($arr1);

$arr2 = ['1', 'B', 'C', 'E'];
chuyenKyTuThuongMang($arr2);
var_dump($arr2);

$arr3 = ['a', 0, null, false];
chuyenKyTuThuongMang($arr3);
var_dump($arr3);
?>
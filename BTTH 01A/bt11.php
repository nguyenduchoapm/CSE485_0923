<?php
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3
unset($array[2]);

// Đặt lại các key để chúng tuần tự
$array = array_values($array);

// Hiển thị mảng sau khi xóa
var_dump($array);

?>
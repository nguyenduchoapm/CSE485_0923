<?php
$numbers = [
    'key1' => 12, 'key2' => 30, 'key3' => 4,
    'key4' => -123, 'key5' => 1234, 'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers);

echo "Phần tử đầu tiên: $firstElement<br>";
echo "Phần tử cuối cùng: $lastElement<br>";

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị trong mảng
$maxValue = max($numbers);
$minValue = min($numbers);
$sum = array_sum($numbers);

echo "Số lớn nhất: $maxValue<br>";
echo "Số nhỏ nhất: $minValue<br>";
echo "Tổng các giá trị: $sum<br>";

// Sắp xếp mảng theo chiều tăng và giảm các giá trị
asort($numbers); // Sắp xếp tăng dần
echo "Sắp xếp tăng dần theo giá trị:<br>";
print_r($numbers);

arsort($numbers); // Sắp xếp giảm dần
echo "Sắp xếp giảm dần theo giá trị:<br>";
print_r($numbers);

// Sắp xếp mảng theo chiều tăng và giảm các key
ksort($numbers); // Sắp xếp tăng dần theo key
echo "Sắp xếp tăng dần theo key:<br>";
print_r($numbers);

krsort($numbers); // Sắp xếp giảm dần theo key
echo "Sắp xếp giảm dần theo key:<br>";
print_r($numbers);

?>
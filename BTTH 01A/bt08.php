<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// Khởi tạo biến để lưu trữ chuỗi min và max
$maxString = $array[0];
$minString = $array[0];

foreach ($array as $str) {
    // Tìm độ dài của chuỗi hiện tại
    $length = strlen($str);

    // So sánh với chuỗi lớn nhất và nhỏ nhất đã biết
    if ($length > strlen($maxString)) {
        $maxString = $str;
    }
    if ($length < strlen($minString)) {
        $minString = $str;
    }
}

// Hiển thị kết quả
echo "Chuỗi lớn nhất là $maxString, độ dài = " . strlen($maxString) . "<br>";
echo "Chuỗi nhỏ nhất là $minString, độ dài = " . strlen($minString);
?>
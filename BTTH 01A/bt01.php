<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
// Hàm tính tổng 
function tinhTong($arr) {
    return array_sum($arr);
}
// Hàm tính tích 
function tinhTich($arr) {
    $result = 1;
    foreach ($arr as $value) {
        $result *= $value;
    }
    return $result;
}
// Hàm tính hiệu 
function tinhHieu($arr) {
    $result = $arr[0]; // Gán giá trị ban đầu là phần tử đầu tiên trong mảng
    for ($i = 1; $i < count($arr); $i++) {
        $result -= $arr[$i];
    }
    return $result;
}
// Hàm tính thương 
function tinhThuong($arr) {
    $result = $arr[0]; // Gán giá trị ban đầu là phần tử đầu tiên trong mảng
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $result /= $arr[$i];
        } else {
            // Xử lý trường hợp chia cho 0 (nếu có)
            echo "Lỗi: Không thể chia cho 0.";
            return false;
        }
    }
    return $result;
}

echo "Tổng của mảng là: " . tinhTong($arrs) . "<br>";
echo "Tích của mảng là: " . tinhTich($arrs) . "<br>";
echo "Hiệu của mảng là: " . tinhHieu($arrs) . "<br>";
$thuong = tinhThuong($arrs);
if ($thuong !== false) {
    echo "Thương của mảng là: " . $thuong . "<br>";
}
?>

<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$nguoi = ['Anh', 'Sơn', 'Thắng', 'tôi'];


if (count($nguoi) == count($arrs)) {
    $n = count($arrs);
    $chuoi = "";

    for ($i = 0; $i < $n; $i++) {
        $chuoi .= "Màu {$arrs[$i]} là màu yêu thích của {$nguoi[$i]}, ";
    }
    echo $chuoi;
} else {
    echo "Số lượng người không trùng khớp với số lượng màu.";
}
?>

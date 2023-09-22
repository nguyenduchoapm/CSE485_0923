<?php
$keys = array("field1" => "first", "field2" => "second", "field3" => "third");
$values = array("field1value" => "dinosaur", "field2value" => "pig", "field3value" => "platypus");

$keysAndValues = array();

foreach ($keys as $key => $label) {
    // Kiểm tra xem có giá trị tương ứng trong mảng $values không
    if (isset($values[$key . "value"])) {
        $keysAndValues[$label] = $values[$key . "value"];
    }
}
print_r($keysAndValues);
?>
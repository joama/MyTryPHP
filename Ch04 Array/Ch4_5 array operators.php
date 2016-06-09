<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>array operators</title>
</head>
<body>
<?php
// 建立2個陣列
$x = array("a" => "蘋果", "b" => "香蕉");
$y = array("a" => "柳丁", "c" => "草莓", "d" => "櫻桃");
// 顯示陣列內容
print_r($x); print "<br/>";
print_r($y); print "<br/>";
$z = $x + $y; // 陣列的聯集運算
echo "聯集陣列 \$x 和 \$y: <br/>";
print_r($z); 
$z = $y + $x; 
echo "<br/>聯集陣列 \$y 和 \$x: <br/>";
print_r($z);

$a = array("蘋果", "香蕉");
$b = array(1 => "香蕉", "0" => "蘋果");
print "<hr/>";

print_r($a); print "<br/>";
print_r($b); print "<br/>";
// 相等運算
var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
// 不相等運算
var_dump($a <> $b); // bool(false)
var_dump($a !== $b); // bool(true)
?>
</body>
</html>
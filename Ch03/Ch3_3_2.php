<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch3_3_2.php</title>
</head>
<body>
<?php
$level = 1; // 計數器變數的初值
$n = 1;
// while 迴圈
while ($level <= 5){
	$n *= $level; // 計算階層
	print $level . "!=" . $n . "<br/>";
	$level++; // 將計數器變數加 1
}
?>
</body>
</html>
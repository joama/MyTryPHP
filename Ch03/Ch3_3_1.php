<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch3_3_1.php</title>
</head>
<body>
<?php
$total = 0; // 指定變數值
// for 遞增迴圈, 計數器變數值是從小至大
for ($i = 6; $i <= 15; $i++){
	print "|" . $i;
	$total += $i; // 執行加總
}
print "|<br>for 遞增迴圈從 6 加到 15=" . $total . "<br/>";
$total = 0; // 重設變數值
// for 遞減迴圈, 計數器變數值是從大至小
for ($i = 50; $i >= 10; $i--){
	print "|" . $i;
	$total += $i; // 執行加總
}
print "|<br>for 遞減迴圈從 50 加到 10=" . $total . "<br/>";
?>
</body>
</html>
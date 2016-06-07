<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch3_3_3.php</title>
</head>
<body>
<?php
$c = 10; // 計數器變數初值
// do/while 迴圈敘述
print "攝氏 - 華氏<br/>";
do{
	$f =(9.0 * $c) / 5.0 + 32.0;
	print $c . "---->" . $f . "<br/>";
	$c += 20; // 增量為 20 度
}while($c <=90); // 結束條件
?>
</body>
</html>
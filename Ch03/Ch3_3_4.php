<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch3_3_4.php</title>
</head>
<body>
<?php
$total = 0; // 指定變數值
$i = 1;
do{ // 無窮迴圈
	print ("|" . $i);
	$total += $i;
	$i++;  // 計數器加1
	if($i > 15) break;  // break 指令
} while (true);
print "->從1加到15=" . $total . "<br/>";
$total = 0; // 重設變數值
for ( $i = 1; $i <= 15; $i++){
	if (($i % 2) == 1) continue; // continue 指令
	print "|" . $i;
	$total += $i; // 增加計數器
}
print " ->從1到15的偶數總和=" . $total . "<br/>";
?>
</body>
</html>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch3_4_2.php</title>
</head>
<body>
<table border="1">
<?php
// 顯示表格的標題列
print "<tr><td>*</td>";
for ($i = 1; $i <=9; $i++)
	print "<td><b>" . $i . "</b></td>";
print "</tr>";
// 巢狀迴圈
for ($i = 1; $i <= 9; $i++) { // 外層迴圈
	print "<tr>";
	print "<td><b>" . $i . "</b></td>";
	$j = 1;
	while ($j <= 9) { // 內層迴圈
		print "<td>";
		print $i . "*" . $j . "=" . $i*$j;
		print "</td>";
		$j++;
	}
	print "</tr>";
}
?>
</body>
</html>
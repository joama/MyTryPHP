<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch3_2_2.php</title>
</head>
<body>
<?php
$height = 115; //指定變數
//顯示變數
print "身高: " . $height . "公分<br/>";
// if/else 二選一條件敘述
if ( $height <= 120 ) { //條件成立
	print $name. "費用打五折!<br/>";
} else { // 條件不成立
	print $name. "費用沒有折扣!<br/>";
}
?>
</body>
</html>
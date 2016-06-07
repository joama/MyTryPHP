<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch3_2_5.php</title>
</head>
<body>
<?php
$hour = 23; // 指定小時數 1-24
print "24 制的時為: " . $hour. "<br/>";
// ?:條件敘述運算子, AM 或 PM
$str = ($hour >= 12) ? " PM" : " AM";
//  ?:條件敘述運算子, 24 轉 12 小時制
$hour = ($hour >= 12) ? $hour-12 : $hour;
print "目前時間為: " . $hour . $str;
?>
</body>
</html>
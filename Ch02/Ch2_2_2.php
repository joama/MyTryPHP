<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch2_2_2.php</title>
</head>
<body>
<?php
//預定變數
print _DIR_."<br/>"; //顯示預定變數 _DIR_
print _FILE_."<br/>";//顯示與訂變數 _FILE_
//常數宣告
define("PI", 3.1415926); //定義數值常數 PI
define("AREA", "面積"); //定義字串常數 AREA
//使用常數計算圓面積
print "圓半徑12的" .  AREA . ": " . PI*12*12 . "<br/>";
print "圓半徑30的" . AREA . ": " . PI*30*30 ."<br/>";
?>
</body>
</html>
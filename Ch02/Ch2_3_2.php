<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch2_3_2.php</title>
</head>
<body>
<?php
$user = &$name;    //參考變數 $name
$user = "江OO";    //即指定變數 name 的值
//顯示變數的內容
print "學生姓名: " . $name . "<br/>";
print "使用者名稱: " . $user . "<br/>";
$myname = "username"; //指定變數 $myname 的值
$$myname = "陳XX"; //指定變數 $username 的值
$username1 = $$myname;  //取出動態變數的值
$username2 = ${$myname};  //取出動態變數的值
//顯示變數的內容
echo "變數 \$myname = $myname<br/>";
echo "變數 $$myname = $username<br/>";
//取得變數 $username 的值
echo "變數 $$myname = ${$myname}<br/>";
echo "變數 \$username1 = $username1<br/>";
echo "變數 \$username2 = $username2<br/>";
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>error handle of exit() with die()</title>
</head>
<body>
<?php
error_reporting(E_ERROR | E_WARNING);
$file = "ch10_6_3.txt"; // 檔案名稱
$fp = @fopen($file, "r") // 開啟檔案
		or exit("錯誤: 檔案 $filename 開啟錯誤!<br/>");
fclose($fp); // 關閉檔案
?>
</body>
</html>
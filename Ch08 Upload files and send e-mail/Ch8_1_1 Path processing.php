<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Path processing</title>
</head>
<body>
<?php
$file = basename($_SERVER["PHP_SELF"],".php");
$path = realpath($file.".php"); // 取得檔案實際路徑
echo "實際路徑: $path<br/>";
$parts = pathinfo($path); // 取得路徑資訊
echo "路徑: " . $parts["dirname"] . "<br/>";
echo "檔名: " . $parts["basename"] . "<br/>";
echo "副檔名: " . $parts["extension"] . "<br/>";
?>
</body>
</html>
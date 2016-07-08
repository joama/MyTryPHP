<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>The file content output into buffer</title>
</head>
<body>
<h1>讀取檔案</h1><hr/>
<ul>
<?php
$file = "MyData.txt"; // 檔案名稱
// 檢查檔案是否存在
if(file_exists($file)){
	echo "<pre>";
	$num = readfile($file); // 讀取檔案內容
	echo "</pre>";
	echo "檔案擁有: $num 個位元組<br/>";
}else
	print "檔案 $file 不存在<br/>";
?>
</ul>
</body>
</html>
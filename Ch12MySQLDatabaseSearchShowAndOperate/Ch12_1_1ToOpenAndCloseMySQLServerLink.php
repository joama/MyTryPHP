<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Open and close MySQL server link</title>
</head>
<body>
<?php
// 建立MySQL伺服器連接
$db = @mysqli_connect(
		'localhost',    // MySQL 主機名稱
		'root',		    // 使用者名稱
		'A123456789');  // 密碼
if(!$db){
	echo "MySQL伺服器連接錯誤!<br/>";
	exit();
}
else{
	echo "MySQL伺服器連接成功!<br/>";
}
mysqli_close($db); // 關閉伺服器連接
?>
</body>
</html>
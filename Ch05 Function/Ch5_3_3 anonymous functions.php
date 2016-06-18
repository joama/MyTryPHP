<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>anonymous functions</title>
</head>
<body>
<?php
// 建立匿名函數
$name = function($username){
	printf("使用者名稱: " . $username . "<br/>");
};
$name("陳OO"); // 呼叫函數
$name("江XX");
?>
</body>
</html>
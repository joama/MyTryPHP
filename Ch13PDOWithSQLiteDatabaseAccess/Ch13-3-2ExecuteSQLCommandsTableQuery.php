<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Execute SQL commands table query.</title>
</head>
<body>
<?php
$dsn = "mysql:dbname=mybooks;host=localhost;port=3306";
$username = "root";
$password = "A123456789";
try{
	// 建立MySQL伺服器連接和開啟資料庫
	$db = new PDO($dsn, $username, $password);
	// 指定PDO錯誤模式和錯誤處理
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM books";
	echo "SQL查詢字串 : $sql<br/>";
	// 送出查詢的指令
	if($result = $db->query($sql)){
		echo "<b>圖書資料:</b><br/>"; // 顯示查詢結果
		// 取得記錄數
		$total_records = $result->rowCount();
		echo "記錄數: $total_records 筆<br/>";
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			echo $row["id"] . "-" . $row["title"] . "<br/>";
		}
	}
}catch(PDOException $e){
	echo "連接失敗: " . $e->getMessage();
}
$db = null;
?>
</body>
</html>
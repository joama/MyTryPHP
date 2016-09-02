<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Named parameters SQL command string.</title>
</head>
<body>
<?php
$dsn = "mysql:dbname=mybooks;host=localhost;port=3306";
$username = "root";
$password = "A123456789";
try{
	// 建立MySQL伺服器連接和開啟資料庫
	$db = new PDO($dsn, "root", "A123456789");
	// 指定PDO錯誤模式和錯誤處理
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM books WHERE category=:type AND price>=:price";
	$stmt = $db->prepare($sql); // 準備SQL指令字串
	// 指定參數值
	$stmt->bindValue(":type", "程式設計", PDO::PARAM_STR);
	$stmt->bindValue(":price", 550, PDO::PARAM_INT);
	$stmt->execute(); // 執行SQL指令字串
	// 送出查詢的SQL指令
	if($result = $stmt->fetchAll(PDO::FETCH_ASSOC)){
		echo "<b>圖書資料(程式設計且>=550元):</b><br/>";
		// 取得記錄數
		$total_records = $stmt->rowCount();
		echo "記錄數: $total_records 筆<br/>";
		foreach($result as $row){
			echo $row["id"] . "-" . $row["title"] . "<br/>";
		}
	}
}catch(PDOException $e){
	echo "連接失敗: "  . $e->getMessage();
}
$db = null;
?>
</body>
</html>
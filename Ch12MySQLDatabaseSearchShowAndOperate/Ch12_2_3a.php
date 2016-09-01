<?php
$id = $_GET["id"];  // 取得書號
// 開啟伺服器連接
$db = mysqli_connect("localhost", "root", "A123456789");
if(!db)
	die("錯誤: 無法連接 MySQL 伺服器!" . mysqli_connect_error());
mysqli_select_db($db, "mybooks") or  // 選擇資料庫
	die("錯誤: 無法選擇資料庫!" . mysqli_error($db));
// 建立SQL指令查詢單筆記錄
$sql = "SELECT * FROM books WHERE id='" . $id . "'"; 
$rows = mysqli_query($db, $sql); // 執行 SQL 查詢
$row = mysqli_fetch_row($rows); // 取出第1筆記錄
mysqli_free_result($rows); // 釋放查詢結果
mysqli_close($db); // 關閉伺服器連接
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>To display the directory with detailed information on the record.(a)</title>
</head>
<body>
<h1>詳細圖書資料</h1><hr/>
<ul>
	<li>書號: <?php echo $id ?></li>
	<li>書名: <?php echo $row[1] ?></li>
	<li>作者: <?php echo $row[2] ?></li>
	<li>書價: <?php echo $row[3] ?></li>
	<li>分類: <?php echo $row[4] ?></li>
	<li>出版日: <?php echo $row[5] ?></li>
</ul>
</body>
</html>
<?php
$db = mysqli_connect("localhost", "root", "A123456789");
if(!db)
	die("錯誤: 無法連接 MySQL 伺服器!" . mysqli_connect_error());
mysqli_select_db($db, "mybooks") or  // 選擇資料庫
	die("錯誤: 無法選擇資料庫!" . mysqli_error($db));
$sql = "SELECT * FROM books";    
$rows = mysqli_query($db, $sql); // 執行 SQL 查詢
$num = mysqli_num_rows($rows); // 取得記錄數
mysqli_close($db); // 關閉連接
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Delete data</title>
</head>
<body>
<h1>圖書目錄 - 更新與刪除</h1><hr/>
<table border="1">
	<thead>
		<tr>
			<th>書號</th>
			<th>書名</th>
			<th>功能</th>
		</tr>
	</thead>
	<tbody>
	<?php
	if($num > 0){ // 有記錄
		while($row = mysqli_fetch_array($rows)){
			$id = $row["id"];
			$title = $row["title"];
			echo "<tr>";
			echo "<td>" . $id . "</td>";
			echo "<td>" . $title . "</td>";
			echo "<td>";
			echo "<a href='Ch12_3_2a.php?id=" . $id . "'>更新</a> | ";
			echo "<a href='Ch12_3_3a.php?id=" . $id . "'>刪除</a>";
			echo "</td>";
			echo "</tr>";
		}
	}
	mysqli_free_result($rows);	// 釋放查詢結果
	?>
	</tbody>	
</table>
</body>
</html>
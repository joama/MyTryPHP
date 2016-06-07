<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch3_2_3.php</title>
</head>
<body>
<?php
$grade = 65; //指定變數
//顯示變數
print "成績: " . $grade . "<br/>";
// if/elseif 多選一條件敘述
if ( $grade >= 80 ) //條件成立
	print "學生 GPA 成績: A<br/>";
elseif ($grade >= 70) // 條件不成立,再次判斷
	print "學生 GPA 成績: B<br/>";
	 elseif ($grade >= 60) //不成立,再次判斷
		print "學生 GPA 成績: C<br/>";
		else
			print "學生 GPA 成績: D<br/>";
?>
</body>
</html>
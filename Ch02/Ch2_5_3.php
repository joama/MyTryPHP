<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8"/>
<title>Ch2_5_3.php</title>
</head>
<body>
<?php
$x = 15; //指定變數 $x 的值
$y = 15; //指定變數 $y 的值
?>
$x = <?php echo $x ?><br/>
$y = <?php echo $y ?><br/>
在後遞增運算: $x++ = <?php echo $x++ ?><br/>
運算後的結果: $x = <?php echo $x ?><br/>
在前遞增運算: --$y = <?php echo --$y ?><br/>
運算後的結果: $y = <?php echo $y ?><br/>
</body>
</html>
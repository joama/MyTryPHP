<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>interface</title>
<?php
abstract class Shape{ // Shape 抽象類別宣告
	public $x; // X座標
	public $y; // Y座標
}
interface AreaInterface{ // AreaInterface介面宣告
	function area(); // 介面方法
}
class Circle extends Shape implements AreaInterface{  // Circle類別宣告
	public $r; // 半徑
	// 建構子方法
	function __construct($x, $y, $r){
		$this->x = $x;
		$this->y = $y;
		$this->r = $r;
	}
	// 成員方法: 實作介面方法area()
	function area(){
		return 3.1416*$this->r*$this->r;
	}
}
?>
</head>
<body>
<?php
$c = new Circle(5.0, 15.0, 5.2); // 建立物件
// 顯示圖形c資料
echo "<h1>圓形c物件的資料</h1><hr/>";
echo "X 座標: " . $c->x . "<br/>";
echo "Y 座標: " . $c->y . "<br/>";
echo "圓半徑: " . $c->r . "<br/>";
// 呼叫物件的成員方法
echo "圓面積: " . $c->area() . "<br/>";
?>
</body>
</html>
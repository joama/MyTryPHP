<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>abstract class</title>
<?php
abstract class Shape{ // Shape 抽象類別宣告
	public $x; // X座標
	public $y; // Y座標
	abstract function area(); // 抽象方法
}
class Circle extends Shape{  // Circle類別宣告
	public $r; // 半徑
	// 建構子方法
	function __construct($x, $y, $r){
		$this->x = $x;
		$this->y = $y;
		$this->r = $r;
	}
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
echo "X 座標: " . $c->x . "<br/>";
echo "Y 座標: " . $c->y . "<br/>";
echo "圓半徑: " . $c->r . "<br/>";
// 呼叫物件的成員方法
echo "圓面積: " . $c->area() . "<br/>";
?>
</body>
</html>
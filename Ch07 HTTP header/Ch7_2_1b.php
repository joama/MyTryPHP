<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ch7_2_1b</title>
</head>
<body>
<form method="post" action="Ch7_2_1c.php">
	<div>
		<div>Q3: 請問下列哪一個不是客戶端網頁技術?</div>
		<input type="radio" name="Q3" id="js" value="JavaScript" />
		<label for ="js">JavaScript</label><br/>
		<input type="radio" name="Q3" id="ajax" value="Ajax" />
		<label for ="ajax">Ajax</label><br/>
		<input type="radio" name="Q3" id="jquery" value="JQuery" />
		<label for ="jquery">JQuery</label><br/>
		<input type="radio" name="Q3" id="jsp" value="JSP" />
		<label for ="jsp">JSP</label><br/>
	</dir><br/>
	<input type="submit" value="評分"/>
	<input type="hidden" name="Q1" id="Q1" value="<?php echo $_POST["Q1"]?>"/>
	<input type="hidden" name="Q2" id="Q2" value="<?php echo $_POST["Q2"]?>"/>
</form>
</body>
</html>
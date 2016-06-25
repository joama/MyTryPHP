<?php
// 設定為XML文件
header("Content-type: text/xml");
// 建立XML文件
print "<?xml version='1.0' encoding='UTF-8'?>";
print "<computer>";
print "<book>";
print "<title>資料結構 - 使用C語言</title>";
print "<author>陳OX</author>";
print "</book>";
print "</computer>";
?>
<?php 
// php $_GET 只能识别input 的name 属性，所以必须设置name 属性，以便PHP 对submit内容的进一步不处理！
print_r($_GET);
echo "\n";
echo "\n<br/>";
echo "sm-name = {$_GET['sm-name']} "; 
echo "\n<br/>";
echo "sm-title = {$_GET['sm-title']}";
echo "\n<br/>";
echo "get info";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form test</title>
</head>
<body>
	<div>
		<h1>form test</h1>
	</div>
</body>
</html>
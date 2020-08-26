<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="esti.css">
	</head>
	

<body>

<div class="hola">
<?php

$v=$_POST['lname'];

$t = date("M");
if ($t > "20") {
  echo "<h1 class='et'>Have a good day! $v</h1>";
}
?>
</div>
</body>
</html>
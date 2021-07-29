<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<?php
	$_SESSION["name"] = "Suraj";
	$_SESSION["email"] = "Surajpahari@gmail.com";
	echo $_SESSION["name"];
	?>
</body>
</html>
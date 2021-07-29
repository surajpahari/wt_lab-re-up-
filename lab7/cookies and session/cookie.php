 <?php
$name = "suraj";
$email = "surajpahari152@gmail.com";
setcookie($name, $email, time() + (86400 * 30));
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$name])) {
  echo 'cookie is not set';
} else {
  echo "cookie name is" . $_COOKIE[$name];
}
?>

</body>
</html>
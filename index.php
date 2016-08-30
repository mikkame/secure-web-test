<?php
var_dump($_SERVER);die();

if($_SERVER['X-Forwarded-Proto'] == 'http'){
	header('Location: https://'.$_SERVER['HTTP_HOST']);
    exit;
}
setcookie('test', 'test', 0, '/', $_SERVER["HTTP_HOST"], true, true);
header("Content-Security-Policy: default-src 'self'");
heder('Strict-Transport-Security: max-age=31536000');
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Secure Web Test</title>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js" integrity="sha384-R4/ztc4ZlRqWjqIuvf6RX5yb/v90qNGx6fS48N0tRxiGkqveZETq72KgDVJCp2TC" crossorigin="anonymous"></script>
	</head>
	<body>
		<h1>Hello World</h1>
	</body>
</html>
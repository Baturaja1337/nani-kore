<!DOCTYPE html>
<html lang="id">
<head>
	<title>Login</title>
</head>
<body>
<?php
if (isset($_POST['check']) && ($_POST['user'] == 'admin') && ($_POST['pass'] == 'admin')) {
	die('Welcome admin');
}
?>
<form method="POST">
	<input type="text" name="user"><br>
	<input type="password" name="pass"><br>
	<input type="submit" name="check" value="login">
</form>
</body>
</html>

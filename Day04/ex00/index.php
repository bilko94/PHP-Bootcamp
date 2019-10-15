<?php

	session_start();
	if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] && $_GET['submit'] == "OK"){
		$_SESSION["login"] = $_GET['login'];
		$_SESSION["passwd"] = $_GET['passwd'];
	}

?>

<html><body>
<form action="index.php" method="GET">
	Login: <input type="text" name="Username" value="<?= $_SESSION['login']?>"><br />
	Password: <input type="password" name="Password" value="<?= $_SESSION['passwd']?>"><br />
	<input type="submit" name="submit" value="OK" />
</form>
</body></html>

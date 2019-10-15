<?php
$file = "../private/passwd";
$dir = "../private";

function create_user() {
	if ($_POST["submit"] != "OK" || $_POST["passwd"] == "")
		return "ERROR\n";
	
	if (!file_exists($dir))
		mkdir($dir);
	
	if (file_exists($file))
		$db = unserialize(file_get_contents($file));
	else
		$db = [];
	
	if ($db[$_POST['login']] != "")
		return "ERROR\n";
	
	$db[$_POST['login']] = hash("md5", $_POST['passwd']);

	file_put_contents($file, serialize($db));

	return "OK\n";
}
echo create_user();
?>

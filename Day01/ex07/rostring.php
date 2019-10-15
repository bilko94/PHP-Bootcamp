#!/usr/bin/php
<?PHP

$temp = trim($argv[1]);
$arr = preg_split('/\ +/', $temp);
$i = 1;

if (!$arr[$i])
{
	echo "$arr[0]\n";
	exit();
}
while ($arr[$i])
{
	echo "$arr[$i]";
	echo " ";
	$i++;
}
echo "$arr[0]\n";

?>
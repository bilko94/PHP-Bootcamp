#!/usr/bin/php
<?PHP

$a = 1;
$b = 0;
$c = 0;
$arr;

while ($argv[$a])
{
	$text = preg_split('/\ +/', $argv[$a]);
	while ($text[$b])
	{
		$arr[$c] = $text[$b];
		$b++;
		$c++;
	}
	$b = 0;
	$a++;
}
$a = 0;
sort($arr);

while ($arr[$a])
{
	echo "$arr[$a]\n";
	$a++;
}

?>
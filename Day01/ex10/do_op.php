#!/usr/bin/php
<?PHP

array_shift($argv);
$i = 0;
while ($argv[$i])
{
	$arr[$i] = trim($argv[$i], " ");
	$i++;
}

if ($arr[1] == '+')
	echo ($arr[0] + $arr[2]);
else if ($arr[1] == '/')
	echo ($arr[0] / $arr[2]);
else if ($arr[1] == '%')
	echo ($arr[0] % $arr[2]);
else if ($arr[1] == '-')
	echo ($arr[0] - $arr[2]);
else if ($arr[1] == '*')
	echo ($arr[0] * $arr[2]);
else
	echo "Incorrect Parameters";
echo "\n";

?>
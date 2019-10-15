#!/usr/bin/php
<?PHP

$count = 1;

while ($argc > 1)
{
	echo "$argv[$count]\n";
	$count++;
	$argc--;
}
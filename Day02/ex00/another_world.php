#!/usr/bin/php
<?PHP

$text = $argv[1];

if ($text[1])
{
	$text = preg_replace("/\t+/", " ", $text);
	$text = preg_replace("/\s+/", " ", $text);
	echo "$text\n";
}

?>
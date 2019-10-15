#!/usr/bin/php
<?PHP

$text = $argv[1];

$text = preg_replace('/\s+/', ' ', $text);
echo "$text\n";

?>
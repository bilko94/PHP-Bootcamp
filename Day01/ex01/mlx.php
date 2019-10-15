#!/usr/bin/php
<?PHP

$count = 1000;
$line = 100;
$x = "X";

while ($count > 0)
{
    $line = 100;
    while ($line > 0)
    {
        echo $x;
        $line--;
    }
    echo "\n";
    $count--;
}

?>
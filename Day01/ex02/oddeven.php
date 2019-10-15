#!/usr/bin/php
<?PHP

//trim - removes the "%" displayed at the end of the line,
//in this case the char displayed after u input "ctrl D"

while (1)
{
    echo "Enter a number: ";
    $input = trim(fgets(STDIN));
    if (feof(STDIN))
    {
        echo "\n";
        exit();
    }
    if (is_numeric($input) == 1)
    {
        if ($input % 2 == 0)
            echo "The number $input is even\n";
        else
            echo "The number $input is odd\n";
    }
    else
        echo "$input is not a number\n";
    echo "\n";
}

?>
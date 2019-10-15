#!/usr/bin/php
<?PHP

// plus sign is the " " (space symbol), find out why..

	function ft_split($string)
	{
		$ret_array = preg_split('/\ +/', $string);
		return ($ret_array);
	}

?>
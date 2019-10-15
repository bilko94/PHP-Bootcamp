#!/usr/bin/php
<?PHP

	function multisort($a, $b)
	{
		$a = strtolower($a);
		$b = strtolower($b);
		$i = 0;
		$arr;

		while ($a[$i] && $a[$i])
		{
			$arrA = ctype_alpha($a[$i]) ? 0 : (ctype_digit($a[$i]) ? 1 : 2);
			$arrb = ctype_alpha($b[$i]) ? 0 : (ctype_digit($b[$i]) ? 1 : 2);
			if ($arrA - $arrb)
				return ($arrA - $arrb);
			else if ($a[$i] != $b[$i])
				return ($a[$i] < $b[$i] ? -1 : 1);
			$i++;
		}
		return ($arrA[$i] == '\0' ? -1 : 1);
	}
	array_shift($argv);
	$arr = explode("\n", preg_replace("/\ +/", "\n", implode("\n", $argv)));
	usort($arr, multisort);
	echo implode("\n", $arr)."\n";

?>
#!/usr/bin/php
<?PHP

	function ft_is_sort($tab)
	{
		$flag = true;
		$sort = $tab;
		$default = $sort;
		sort($sort);

		for ($i = 0; $i < count($sort); $i++)
			if ($sort[$i] != $default[$i])
				$flag = false;
		return ($flag);
	}

?>
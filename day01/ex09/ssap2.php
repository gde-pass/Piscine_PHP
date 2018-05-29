#!/usr/bin/php
<?php
if ($argc > 1)
{
	// Récupere tous les arguments et les places dans un tableaux en suppriment les
	// espaces en trop au milleu et sur les cotés.

	$i = 1;
	while($i < $argc)
	{
		$string .= $argv[$i];
		$string .= " ";
		$i++;
	}
	$array = preg_split("/ +/", trim($string));

// Sépare en plusieurs tableaux selon si c'est un chiffre ou des caracteres alpha

	foreach ($array as $value)
	{
		if (ctype_digit($value))
		{
			$digit_array[] = $value;
			unset($array[array_search($value, $array)]);
		}
		if (ctype_alpha($value))
		{
			$alpha_array[] = $value;
			unset($array[array_search($value, $array)]);
		}
	}

// Trie des 3 tableaux

	natcasesort($alpha_array);
	sort($digit_array, SORT_STRING);
	sort($array, SORT_STRING);

// Partie Affichage

	foreach ($alpha_array as $value)
		echo "$value", PHP_EOL;
	foreach ($digit_array as $value)
		echo "$value", PHP_EOL;
	foreach ($array as $value)
		echo "$value", PHP_EOL;
}
?>

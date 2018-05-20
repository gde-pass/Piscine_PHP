#!/usr/bin/php
<?php
$i = 1;
while($i < $argc)
{
	$string .= $argv[$i];
	$string .= " ";
	$i++;
}
$array = preg_split("/ +/", trim($string));

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

natcasesort($alpha_array);
sort($digit_array, SORT_STRING);
sort($array, SORT_STRING);

foreach ($alpha_array as $value)
	echo "$value", PHP_EOL;
foreach ($digit_array as $value)
	echo "$value", PHP_EOL;
foreach ($array as $value)
	echo "$value", PHP_EOL;
?>

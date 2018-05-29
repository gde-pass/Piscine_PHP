#!/usr/bin/php
<?php
if ($argc > 1)
{
	$i = 1;
	while($i < $argc)
	{
		$array .= $argv[$i];
		$array .= " ";
		$i++;
	}
$array = preg_split("/ +/", trim($array));
sort($array);

foreach ($array as $value)
	echo "$value", PHP_EOL;
}
?>

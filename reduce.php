<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);


function reduce($name) {
	$size = 13;
	while (strlen($name) > $size) {
		$names = array_reverse(explode(' ', $name));
		foreach($names as $k => $v) {
			if (strlen($v) > 1) {
				$names[$k] = substr($v, 0, -1);
				break;
			}
		}

		$name = implode(' ', array_reverse($names));
	}
	return $name;
}

echo reduce($_POST['content']);


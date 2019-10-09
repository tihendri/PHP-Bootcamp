#!/usr/bin/env php
<?php
	for ($i = 0; $i < sizeof($argv); $i++) 
	{
		$str = trim(preg_replace("#\s+#", " ", $argv[1]));
	}
	echo ($str."\n");
?>

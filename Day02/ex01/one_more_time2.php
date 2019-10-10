#!usr/bin/php
<?PHP
	$day = array ("lundi"=>"Monday", "mardi"=>"Tuesday", "mercredi"=>"Wednesday", "jeudi"=>"Thursday", "vendredi"=>"Friday", "samedi"=>"Saturday", "dimanche"=>"Sunday");
	$month = array("janvier"=>"January", "février"=>"February", "mars"=>"March", "avril"=>"April", "mai"=>"May", "juin"=>"June", "juillet"=>"July", "aout"=>"August", "septembre"=>"September", "octobre"=>"October", "novembre"=>"November", "décembre"=>"December");
	$arg = array_shift($argv);
	$argv = array_map('strtolower', ($argv));
	$time = implode(" ", $argv);
	$time = str_replace(array_keys($day), $day, $time);
	$time = str_replace(array_keys($month), $month, $time);
	if (DateTime::createFromFormat('l j F Y H:i:s', $time))
	{
		$timestamp = strtotime($time);
		echo ($timestamp);
	}
	else
		echo("Wrong format");
?>

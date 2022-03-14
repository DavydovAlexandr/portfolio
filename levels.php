<?php
require_once ('config/config.php');
	if($_GET['event'] == 'get_level'){
		$level = $_GET['level'];
		$f = fopen("levels/level_".$level.".txt", 'r');
		echo fgets($f);
		fclose($f);
	}

	if($_GET['event'] == 'get_col_levels'){
		$path = 'levels';
		$dir = opendir("$path");
		$i = 0;
		while(false !== ($file = readdir($dir))){
			if(strpos($file, 'txt', 1)){
				$i++;
			}
		}
	echo $i;
	}

	if($_GET['event'] == 'set_level'){
		$level = $_GET['level'];
		$arr = $_GET['arr'];
		$f = fopen("levels/level_".$level.".txt", "w+"); fwrite($f, $arr); fclose($f);
		echo $arr;
	}
?>
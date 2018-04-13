<?php
function dirToArray($dir)
{ 
	$result = array(); 
	$cdir = scandir($dir); 

	foreach ($cdir as $key => $value) 
	{ 
		if (!in_array($value,array(".",".."))) 
		{ 
			if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
				$result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
			else 
				$result[] = $value;
		} 
	} 

	return $result; 
} 
# https://www.programmableweb.com/news/150-translation-apis-google-translate-merriam-webster-and-microsoft-translator/2018/03/22
# C:\xampp\htdocs\belajar\baca-fail\srt\MrRobot\MrRobotSeason01
$dir1 = './MrRobot';
$files = dirToArray($dir1);
include 'class/bacaSrt.php';

//echo '<pre>';//print_r($files);
$k = 1;
foreach($files as $key => $file1):
	foreach($file1 as $key2 => $file):
	//echo '<hr size=7>' . $key2 . ':' . $dir1 . '/' . $key . '/' . $file . '<hr>';
	echo '<hr size=7>' . $k++ . ':' . $dir1 . '/' . $key . '/' . $file . '<hr>';
	$papar = new bacaSrt;
	$papar->mulaBaca($dir1 . '/' . $key . '/' . $file);
endforeach;
endforeach;//*/

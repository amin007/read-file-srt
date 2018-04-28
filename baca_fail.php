<?php
include 'function/Fungsi.php';
include 'class/bacaSrt.php';
include 'rahsia.php';

# https://www.programmableweb.com/news/150-translation-apis-google-translate-merriam-webster-and-microsoft-translator/2018/03/22
# C:\xampp\htdocs\belajar\baca-fail\srt\MrRobot\MrRobotSeason01
# C:\xampp\htdocs\belajar\baca-fail\srt\MrRobot\MrRobotSeason02
# C:\xampp\htdocs\belajar\baca-fail\srt\MrRobot\MrRobotSeason03
$dir1 = './MrRobot/MrRobotSeason01';
$files = dirToArray($dir1);

//echo '<pre>'; print_r($files);
/*$k = 1; # untuk panggil banyak folder dan fail
foreach($files as $key => $file1):
	foreach($file1 as $key2 => $file):
	//echo '<hr size=7>' . $key2 . ':' . $dir1 . '/' . $key . '/' . $file . '<hr>';
	echo '<hr size=7>' . $k++ . ':' . $dir1 . '/' . $key . '/' . $file . '<hr>';
	$papar = new bacaSrt;
	$papar->mulaBaca($dir1 . '/' . $key . '/' . $file, $key);
endforeach;
endforeach;//*/

$k = 1; # untuk panggil 1 folder dan banyak fail
foreach($files as $key => $file):
	$kunci = '<hr size=7>' . $k++ . ':' . $dir1 . '/' . $file . '<hr>';
	$papar = new bacaSrt;
	$fail[] = $kunci;
	$teks[] = $papar->mulaBaca($dir1 . '/' . $file, $key, $key3);
endforeach;//*/

# mula translate
$kira = $no = 0;
echo $fail[$kira];
for($no = 0; $no <= 99; $no++):
	//echo $teks[$kira][$no] . '<br>';
	echo translateGo($key3, $teks[$kira][$no]) . '<br>';
endfor; 
echo '<hr>';

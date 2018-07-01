Taip kelas Papar


Hero : ok dalam class papar ada 3 fungsi iaitu
pilihTemplate
paparTemplate
bacaTemplate

pilihTemplate untuk kita pilih template sedia ada dalam sistem
paparTemplate untuk debug lokasi template di mana
manakala bacaTemplate untuk masukkan semua 

Amoi : ini kena taip atau salin-tampal.
Hero : ok kita salin di https://github.com/amin007/mvc-melayu/blob/master/Aplikasi/Kelas/Kitab/Papar.php

<?php
namespace Aplikasi\Kitab; //echo __NAMESPACE__; 
class Papar
{
#==========================================================================================
	function __construct()
	{
		//echo '<br>1. Anda berada di class Papar<br>';
	}
#-----------------------------------------------------------------------------------------
	function pilihTemplate($template = 0)
	{
		switch ($template)
		{
			case 5: $jenis = 'miminium';
			break;

			case 4: $jenis = 'modern_admin_panel';
			break;

			case 3: $jenis = 'startbootstrap-sb-admin-2-1.0.8';
			break;

			case 2: $jenis = 'FlatAdmin-V.2';
			break;

			case 1: $jenis = 'AdminLTE-2.3.0';
			break;

			default: $jenis = 'A0';
			break;
		}
		return $jenis;
	}

#------------------------------------------------------------------------------------------
	public function paparTemplate($nama, $template, $noInclude = false)
	{
		$namafail = explode('/', $nama);
        $failPapar = GetMatchingFiles(
			GetContents(PAPAR . '/' . $namafail[0]),
			$namafail[1] . '.php');
		$paparFail = $failPapar[0];
		$lokasiTemplate = '/template/' . $template;

		/*echo '<hr size=2>$namafail=<pre>'; print_r($namafail) . '</pre><br>';
		//echo '$failPapar=<pre>'; print_r($failPapar) . '</pre><br>';
		echo '$paparFail->' . $paparFail . '<br>'
			. '$template->' . $template . '<br>'
			. '$lokasiTemplate->' . $lokasiTemplate . '<br>'
			. '$noInclude->' . $noInclude . '<br>'
			. '';//*/

		echo '<hr>require ' . PAPAR . $lokasiTemplate . '/diatas.php'
			. '<br>require ' . PAPAR . $lokasiTemplate . '/menu_atas.php'
			. '<br>require ' . PAPAR . $lokasiTemplate . '/menu-tengah-atas.php'
			. '<br>require ' . $paparFail
			. '<br>require ' . PAPAR . $lokasiTemplate . '/menu-tengah-bawah.php'
			. '<br>require ' . PAPAR . $lokasiTemplate . '/dibawah.php'
			. '';//*/
	}
#------------------------------------------------------------------------------------------
	public function bacaTemplate($nama, $template, $noInclude = false)
	{
		$namafail = explode('/', $nama);
        $failPapar = GetMatchingFiles(
			GetContents(PAPAR . '/' . $namafail[0]),
			$namafail[1] . '.php');
		$paparFail = $failPapar[0];
		$lokasiTemplate = '/template/' . $template;
		//echo '$paparFail=' . $paparFail . '|<br>';
		//echo '$noInclude=' . $noInclude . '|<br>';

		if ($paparFail == false)
		{
			\Aplikasi\Kitab\Peta::failPaparTidakWujud();
			//echo 'failPaparTidakWujud()';
		}
		elseif ($noInclude == true)
		{
			require $paparFail;
		}
		else
		{
			require PAPAR . $lokasiTemplate . '/diatas.php';
			require PAPAR . $lokasiTemplate . '/menu_atas.php';
			require PAPAR . $lokasiTemplate . '/menu-tengah-atas.php';
			require $paparFail;
			require PAPAR . $lokasiTemplate . '/menu-tengah-bawah.php';
			require PAPAR . $lokasiTemplate . '/dibawah.php';
		}//*/
	}
#-----------------------------------------------------------------------------------------
#==========================================================================================
}


Bersambung ...
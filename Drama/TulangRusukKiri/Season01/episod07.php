Taip kelas Papar

Hero : ok dalam class papar ada 3 fungsi iaitu
pilihTemplate, paparTemplate dan bacaTemplate

pilihTemplate untuk kita pilih template sedia ada dalam sistem
paparTemplate untuk debug lokasi template di mana
manakala bacaTemplate untuk masukkan semua 

Amoi : baik, saya faham sikit-sikit-si
Hero : ok sekarang taip 
Taip -lebih besar-soalan-php-[enter]
Amoi : -<-?-php-[enter]
ok lepas itu taip apa?
Hero : kita taip 
-namespace-Aplikasi-\-Kitab-coma bertitik-[ruang]-//echo-[ruang]-__NAMESPACE__;-[enter]
Amoi :
-namespace-Aplikasi-\-Kitab-;-[ruang]-//echo-[ruang]-__NAMESPACE__;-[enter]
Hero : taip class-[ruang]-Papar-[enter]-{-[enter]
Amoi : class-[ruang]-Papar-[enter]-{-[enter]
Hero : lepas itu buat garisan panjang kalulistiwa
-#==========================================================================================
Amoi : -#==========================================================================================
Hero : ok, sekarang buat fungsi __construct.
Taip -[tab]-function __construct()-[enter]-[tab]-{-[enter]
Amoi : -[tab]-function __construct()-[enter]-[tab]-{-[enter]
Hero : lepas itu taip -[tab]//echo '<br>1. Anda berada di class Papar<br>';-[enter]-[tab]-}-[enter]
Amoi : -[tab]//echo '<br>1. Anda berada di class Papar<br>';-[enter]-[tab]-}-[enter]
Hero : lepas itu buat garisan panjang kalulistiwa
-#-----------------------------------------------------------------------------------------
Amoi : -#-----------------------------------------------------------------------------------------
Hero : sekarang kita sudah buat fungsi __construct, lepas ini buat class pilihTemplate
taip -[tab]function pilihTemplate($template = 0)-[enter]-[tab]-{-[enter]
Amoi : -[tab]function pilihTemplate($template = 0)-[enter]-[tab]-{-[enter]
Hero : ok, sekarang ini kita set nilai default $template = 0
Amoi : kenapa kena setkan $template = 0?
Hero : nanti kita akan pulangkan nilai $jenis = A0 yang merujuk kepada bootstrap versi 3.3.7
Amoi : oh faham faham
Hero : ok, sekarang taip -[tab]-[tab]switch ($template)-[enter]-[tab]-[tab]{-[enter]
Amoi : -[tab]-[tab]switch ($template)-[enter]-[tab]-[tab]{-[enter]
Hero : lepas tu taip -[tab]-[tab]-[tab]case 5: $jenis = 'A5';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Amoi : -[tab]-[tab]-[tab]case 5: $jenis = 'A5';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Hero : lepas tu taip -[tab]-[tab]-[tab]case 4: $jenis = 'A4';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Amoi : -[tab]-[tab]-[tab]case 4: $jenis = 'A4';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Hero : lepas tu taip -[tab]-[tab]-[tab]case 3: $jenis = 'A3';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Amoi : -[tab]-[tab]-[tab]case 3: $jenis = 'A3';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Hero : lepas tu taip -[tab]-[tab]-[tab]case 2: $jenis = 'A2';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Amoi :  -[tab]-[tab]-[tab]case 2: $jenis = 'A2';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Hero : lepas tu taip -[tab]-[tab]-[tab]case 1: $jenis = 'A1';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Amoi : -[tab]-[tab]-[tab]case 1: $jenis = 'A1';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Hero : lepas tu taip -[tab]-[tab]-[tab]default: $jenis = 'A0';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Amoi : -[tab]-[tab]-[tab]default: $jenis = 'A0';-[enter]-[tab]-[tab]-[tab]break;-[enter]-[enter]
Hero : ok akhirnya taip -[tab]-[tab]-}-[enter]-[tab]-[tab]return $jenis;-[enter]-[tab]-}-[enter]
Amoi : ok akhirnya taip -[tab]-[tab]-}-[enter]-[tab]-[tab]return $jenis;-[enter]-[tab]-}-[enter]

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
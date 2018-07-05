Biarlah Rahsia - Sesi Perkenalan

Hero : Awak suka dengar lagu cinta?
Amoi : Bergantung kepada mood, kenapa ya tiba-tiba tanya bab cinta?
Hero : Oh lepas ini kita akan buat class Sesi merujuk kepada istihar session dalam php
kita akan guna session_start() dan session_destroy() serta cara nak set dan dapatkan nilai
dalam session
Amoi : Jadi macam mana mahu buat class tersebut?
Hero : Mula-mula buat folder dalam Aplikasi/Kelas/Kitab/Biarahsia
Amoi : Kenapa kena namakan nama folder Biarahsia?
Hero : Kan Dato Siti Nurhaliza ada buat satu lagu Biarlah Rahsia sejak 7 tahun yang lepas.
Amoi : ceh, siap dedikasikan dalam programming php pula
Hero : hahaha. ok buat fail bernama Sesi.php
Amoi : [tunjuk video amoi tengah buat folder/fail dalam laptop]
ok sekarang taip 
Taip -lebih besar-soalan-php-[enter]
Amoi : -<-?-php-[enter]
ok lepas itu taip apa?
Hero : kita taip 
-namespace-Aplikasi-\-Kitab-coma bertitik-[ruang]-//echo-[ruang]-__NAMESPACE__;-[enter]
Amoi :
-namespace-Aplikasi-\-Kitab-;-[ruang]-//echo-[ruang]-__NAMESPACE__;-[enter]
Hero : taip class-[ruang]-Sesi # \Aplikasi\Kitab\Sesi::-[enter]-{-[enter]
Amoi : class-[ruang]-Sesi # \Aplikasi\Kitab\Sesi::-[enter]-{-[enter]
Hero : lepas itu buat garisan panjang kalulistiwa
-#==========================================================================================
Amoi : -#==========================================================================================
Hero : Ok, biasanya dalam mula-mula bercinta dalam budaya melayu dia orang ada bidalan.
Amoi : Antara bidalan yang dia orang guna?
Hero : Antaranya "dari mata turun ke hati", "hanya kerana mata", "walaupun rupamu tidak ku kenal,
tetapi lubang hidungmu tetap menjadi pujaan hatiku"
Amoi : Jadi kita hendak gambarkan penggunaan session_start() dalam budaya melayu gitu?
Hero : Ok, kita boleh namakan fungsi tersebut mataMu().
sekarang taip -[tab]-public static function mataMu()-[enter]-[tab]-{-[enter]
Amoi : -[tab]-public static function mataMu()-[enter]-[tab]-{-[enter]
Hero : lepas itu taip -[tab]-@session_start();-[enter]-[tab]-}-[enter]
Amoi : -[tab]-@session_start();-[enter]-[tab]-}-[enter]
Hero : ok, sekarang kita hendak masukkan nilai dalam tatasusunan session.
dalam budaya inggeris dia orang guna ayat dating.
jadi dalam budaya melayu kita guna temujanji.
Amoi : oh faham-faham, jadi hendak namakan fungsi tersebut adalah temujanji($bila,$tempat)
Hero : oh pandainya, anak siapalah ini.
sekarang taip -[tab]-public static function temujanji($bila,$tempat)-[enter]-[tab]-{-[enter]
Amoi : -[tab]-public static function temujanji($bila,$tempat)-[enter]-[tab]-{-[enter]
Hero : lepas itu taip -[tab]-$_SESSION[$bila] = $tempat;-[enter]-[tab]-}-[enter]
Amoi : -[tab]-$_SESSION[$bila] = $tempat;-[enter]-[tab]-}-[enter]
Hero : lepas ini kita hendak dapatkan nilai dalam session.
Amoi : saya cadangkan kita gunakan jumpa($bila).
Hero : Jika macam itu taip -[tab]-public static function jumpa($bila)-[enter]-[tab]-{-[enter]
Amoi : -[tab]-public static function jumpa($bila)-[enter]-[tab]-{-[enter]
Hero : lepas itu taip -[tab]-if (isset($_SESSION[$bila]))-[enter]
-[tab]-return $_SESSION[$key];-[enter]-[tab]-}-[enter]
Amoi :  -[tab]-if (isset($_SESSION[$bila]))-[enter]
-[tab]-return $_SESSION[$key];-[enter]-[tab]-}-[enter]
Hero : setiap pertemuan ada perpisahan. akan wujud perasan gembira, rindu dan sebagainya lepas itu.
tetapi dalam php, dia guna istilah session_destroy().
Itu memgambarkan kemusnahan, kehancuran, putus cinta, kecewa, patah hati, ditolak cinta dan sebagainya.
Amoi : Oh dahsyat hingga hujung nyawa gitu. jadi hendak manakan apa fungsi ini?
Hero : apa kata kta tanya dalam group tanya pendapat dia orang.
Amoi : idea yang menarik. kita tunggu jawapan dia orang dulu ya?

Bersambung ...
Taip kelas Kawal

Hero : Ok sekarang kita akan buat class Kawal.
Taip -lebih besar-soalan-php-[enter]
Amoi : -<-?-php-[enter]
ok lepas itu taip apa?
Hero : kita taip 
-namespace-Aplikasi-\-Kitab-coma bertitik-[ruang]-//echo-[ruang]-__NAMESPACE__;-[enter]
Amoi :
-namespace-Aplikasi-\-Kitab-;-[ruang]-//echo-[ruang]-__NAMESPACE__;-[enter]
Kenapa kena echo __NAMESPACE__?
Hero : hendak debug sahaja supaya kita berada di lokasi fail yang sebenar
Amoi : oooo. ok ok. lepas itu taip apa?
Hero : taip class-[ruang]-Kawal-[enter]-{-[enter]
Amoi : taip class-[ruang]-Kawal-[enter]-{-[enter]
Hero : lepas itu buat garisan panjang kalulistiwa
-#==========================================================================================
Amoi : -#==========================================================================================
ooooooo, ini garisan kalulistiwa ya?
Hero : ya sebab dia panjang sangat hahaha
Amoi : baik baik saya suka saya suka.
Hero : lepas ini taip fungsi pula. 
taip -[tab]function-[space]__construct()-[enter]-{
Amoi : -[tab]function-[space]__construct()-[enter]-{
Hero : lepas itu taip -[tab]-[tab]//echo-[ruang]-'<br>class Kawal';-[enter]
Amoi : -[tab]-[tab]//echo-[ruang]-'<br>class Kawal';-[enter]
Hero : lepas itu taip -[tab]-[tab]$this->papar = new \Aplikasi\Kitab\Papar();-[enter]
Amoi : -[tab]-[tab]$this->papar = new \Aplikasi\Kitab\Papar();-[enter]
Hero : lepas itu tutup fungsi tersebut dan buat garisan kalulistiwa
Amoi : -[tab]}-[enter]
#==========================================================================================-[enter]
Ok $this->papar untuk apa ya?
Hero : oph itu pembolehubah untuk digunakan dalam class Papar nanti.
Jadi anak-anak class Kawal akan guna $this->papar kemudian.
Amoi : oh class pun ada anak-anak ya? so sawit
Hero : Ya, ok cuba semak dalam class Peta yang kita buat tadi ada ayat jemaahTaskil()?
Amoi : Perasan, itu untuk apa ya?
Hero : Oh kita mahu muatkan class anak-anak Tanya pula.
Amoi : tadi ada anak-anak class Kawal, Papar. ini pula anak-anak class Tanya pula.
Hero : ini namanya konsep mvc. m merujuk kepada model, v merujuk kepada view, c merujuk kepada controller.
cuma dalam tukar konsep dalam bahasa melayu, m-model kita wakilkan Tanya, v-view kita wakilkan Papar, 
c-controller kita wakilkan Kawal.
Amoi : kenapa pakai istilah jemaahTaskil?
Hero : kita ambil konsep dalam jemaah tabligh. jemaah taskil bermaksud ada sekumpulan orang yang dilantik
akan melawat orang-orang yang bagi azam akan keluar 40 hari/4 bulan.
Biasanya dia orang akan rekod dalam buku. lepas itu akan bagi laporan kepada elder atau orang-orang lama
dalam mesyuarat mingguan dan bulanan.
Amoi : Oh ingat dalam Pakatan Harapan sahaja ada kumpulan khas, kumpulan tabligh pun sama ya.
Hero : well, ini konsep sahaja. boleh sahaja hendak pakai istilah lain. tetapi buat masa sekarang,
kita kekalkan konsep tersebut dulu.
Amoi : ok faham-faham, apa yang kena taip dalam fungsi jemaahTaskil
Hero : taip -public function jemaahTaskil($nama)-[enter]-[tab]-{-[enter]
Amoi : -public function jemaahTaskil($nama)-[enter]-[tab]-{-[enter]
Hero : lepas itu taip -[tab]-[tab]list($tanya) = $this->semakPencam($nama);-[enter]
Amoi : -[tab]-[tab]list($tanya) = $this->semakPencam($nama);-[enter]
Hero : lepas itu taip -[tab]-[tab]if (file_exists($tanya))-[tab]-[tab]-{-[enter]
Amoi : -[tab]-[tab]if (file_exists($tanya))-[tab]-[tab]-{-[enter]
Hero : lepas itu taip -[tab]-[tab]-[tab]$tanyaNama = '\\Aplikasi\Tanya\\' . huruf('Besar', $nama) . '_Tanya';-[enter]
Amoi -[tab]-[tab]-[tab]$tanyaNama = '\\Aplikasi\Tanya\\' . huruf('Besar', $nama) . '_Tanya';-[enter]
Hero : lepas itu taip -[tab]-[tab]-[tab]//echo '<br>$tanyaNama->' . $tanyaNama . '<br>';-[enter]-[enter]
Amnoi : -[tab]-[tab]-[tab]//echo '<br>$tanyaNama->' . $tanyaNama . '<br>';-[enter]-[enter]
Hero : lepas itu taip -[tab]-[tab]-[tab]if(class_exists($tanyaNama))-[enter]
Amoi : -[tab]-[tab]-[tab]if(class_exists($tanyaNama))-[enter]
Hero : lepas itu taip -[tab]-[tab]-[tab]-[tab]$this->tanya = new $tanyaNama();-[enter]
Amoi : -[tab]-[tab]-[tab]-[tab]$this->tanya = new $tanyaNama();-[enter]
Hero : lepas itu taip -[tab]-[tab]-[tab]-else-[enter]-{-[enter]
Amoi : -[tab]-[tab]-[tab]-else-[enter]-{-[enter]
Hero : lepas itu taip -[tab]-[tab]-[tab]-[tab]$amaran = 'class ' . $tanyaNama . ' tidak wujud tetapi fail '
-[enter]-[tab]-[tab]-[tab]-[tab]. $tanya . ' wujud.';-[enter]
Amoi : l-[tab]-[tab]-[tab]-[tab]$amaran = 'class ' . $tanyaNama . ' tidak wujud tetapi fail '
-[enter]-[tab]-[tab]-[tab]-[tab]. $tanya . ' wujud.';-[enter]
Hero : lepas itu taip -[tab]-[tab]-[tab]-[tab]Peta::classTanyaTidakWujud($amaran);-[enter]
Amoi : -[tab]-[tab]-[tab]-[tab]Peta::classTanyaTidakWujud($amaran);-[enter]
Hero : lepas itu taip -[tab]-[tab]-[tab]-}-[enter]-[tab]-[tab]-}//*/-[enter]--[tab]-}-[enter]
Amoi : -[tab]-[tab]-[tab]-}-[enter]-[tab]-[tab]-}//*/-[enter]--[tab]-}-[enter]
Hero : Ok, buat garisan kalulistiwa.
Amoi : -#------------------------------------------------------------------------------------------
-[enter]
Oh, jadi fungsi jemaahTaskil mahu semak sama ada anak-anak class Tanya wujud atau tidak.
jika wujud, baru istihar kelas.
jika tidak, campak dalam classTanyaTidakWujud
Hero : pandai. ok peraa ada fungsi semakPencam?
Amoi : ya, ini untuk apa ya?
Hero : ini untuk semak sama ada anak-anak class Tanya wujud atau tidak.
ok pergi website https://github.com/amin007/mvc-melayu/blob/master/Aplikasi/Kelas/Kitab/Kawal.php
salin fungsi semakPemcam
Amoi : asyik-asyik salin dan tampal. ok kejap.
Hero : ok sekarang buat garisan kalulistiwa
Amoi :
-#------------------------------------------------------------------------------------------
-#==========================================================================================
-}-[enter]

Bersambung ...
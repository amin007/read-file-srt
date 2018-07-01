taip kelas Tanya

Hero : ok sekarang taip kelas Tanya pula
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
Hero : taip class-[ruang]-Tanya-[enter]-{-[enter]
Amoi : taip class-[ruang]-Tanya-[enter]-{-[enter]
Hero : lepas itu buat garisan panjang kalulistiwa
-#==========================================================================================
-#-------------------------------------------------------------------------------------------------
Amoi : -#==========================================================================================
-#-------------------------------------------------------------------------------------------------
kenapa ada 2 garisan kalulistiwa?
Hero : dalam class ini, kita akan membentuk data. sama ada kita panggil dari database atau 
kita bentuk sendiri.
jadi dalam ini kita akan bentuk arahan sql yang biasa orang gunakan.
sekarang orang akan guna class Pdo atau Mysqli untuk bercakap dengan database.
Amoi : ok faham faham. apa hendak taip dalam class ini?
Hero : ok sekarang taip -[tab]-function __construct()-[enter]-[tab]-{-[enter]
Amoi : -[tab]-function __construct()-[enter]-[tab]-{-[enter]
Hero : lepas itu taip -[tab]$this->db = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);-[enter]
Amoi : -[tab]-[tab]$this->db = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);-[enter]
Hero : lepas itu taip -[tab]//$this->db = new \Aplikasi\Kitab\DB_Mysqli(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);-[enter]
Amoi : -[tab]//$this->db = new \Aplikasi\Kitab\DB_Mysqli(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);-[enter]
Hero : lepas itu taip -[tab]$this->sql = new \Aplikasi\Kitab\Sql();-[enter]
Amoi : -[tab]$this->sql = new \Aplikasi\Kitab\Sql();-[enter]
Hero : ok tutup fungsi dan class
Amoi :
-[tab]-}-[enter]
-#------------------------------------------------------------------------------------------
-#==========================================================================================
-}-[enter]
Hero : jadi dalam __construct, kita akan bentukkan $this->db dan $this->sql
$this->db untuk panggil database
$this->sql untuk membentuk arahan sql agar senang dibaca oleh $this->db
memandangkan ada 2 jenis $this->db, terdapat arahan sql yang berbeza.
jadi kita terpaksa buat $this->sql untuk arahan sql tersebut
Amoi : ok faham.

Bersambung ...
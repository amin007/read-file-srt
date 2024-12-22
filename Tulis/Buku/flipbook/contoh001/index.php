<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Kod Rujukan Utama</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<!-- link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" -->
</head>
<body>

<!-- menu tengah atas -->
<!-- hr><h1>Kod Rujukan Utama</h1><hr -->
<!-- =============================================================================================== -->
<!-- Previous Button -->
<button id="prev-btn">
<i class="fas fa-arrow-circle-left"></i>
</button>
<!-- =============================================================================================== -->
<!-- Book Start -->
<div id="book" class="book">
	<!-- =============================================================================================== -->
	<!-- Dynamically Adding Pages -->
<?php
$style ='';
$style2 = 'style="background-color: #ffff00; border-width:1px; border-style: solid; border-color: #000000; height: 500px"';
$titles = [
"Kebangkitan Amin Ledang",
"Memahami Emosi dengan Cara Robot",
"Penat dan Lelah: Pandangan Baru",
"Kegembiraan: Manusia dan Robot Bersatu",
"Hubungan Robot dengan Robot",
"Hubungan Robot dan Manusia Semakin Erat",
"Logik dan Emosi: Gabungan Dua Dunia",
"Kisah Cinta dan Konflik",
"Kerjasama Manusia dan Robot dalam Dunia Kerja",
"Cabaran Budaya dan Etika Kerja",
"R&D: Menguji Idea Baru",
"Johor: Pemimpin Masa Depan Robotik",
"Pengaruh Negeri Lain",
"Malaysia dan Masa Depan Ekonomi",
"Robot Tentera dan Isu Moral",
"Robot dengan Nilai Islam",
"Soal Hidup dan Mati",
"Robot Tua dan Penat",
"Apa yang Membezakan Robot dan Manusia?",
"Satu Negara Robot?",
"Robot dan Islam",
"Pendidikan Bersama Robot",
"Seni dan Jiwa di Era Robot",
"Juara Lagu dan Isu Hakcipta AI",
"Drama, Filem, dan Revolusi AI",
"Ekstremisme Teknologi dan Ekonomi Berdasarkan Kebahagiaan",
"Robot dan Alam Sekitar",
"Peranan Robot dalam Konflik Sosial",
"Kenangan dan Renungan Amin Ledang",
"Dunia Baru, Harapan Baru",
"Nanoteknologi: Dunia Kecil yang Membawa Perubahan Besar",
"Membersihkan Kolesterol dengan Teknologi Nano DNA"
];

foreach ($titles as $index => $title):
echo "\n" . '<!-- Paper ' . ($index + 1) . ' -->'
. "\n" . '<div class="paper" id="p' . ($index + 1) . '">'
. "" . '<div class="front">'
. "" . '<div class="front-content">'
. "" . '<h1>' . $title . '</h1>'
. "" . '</div><!--  id="f' . ($index + 1) . '" class="front-content" -->'
. "" . '</div><!-- class="front" -->'
. "\n" . '<div class="back">'
. "" . '<div class="back-content">'
. "" . '<h4>' . $title . '</h4>'
. '<div class="content">'
. '<p>Isi bab ' . ($index + 1) . ' akan diletakkan di sini.</p>'
. '</div><!-- class="content" -->'
. "" . '</div><!-- id="b' . ($index + 1) . '" class="back-content" -->'
. "" . '</div><!-- class="back" -->'
. "\n" . '</div><!-- id="p' . ($index + 1) . '" class="paper" -->'
. "\n" . '<!-- =============================================================================================== -->'
. "\n";
endforeach;
?>
</div><!-- id="book" class="book" -->
<!-- Book End -->
<!-- =============================================================================================== -->
 <!-- Next Button -->
<button id="next-btn">
<i class="fas fa-arrow-circle-right"></i>
</button>
<!-- =============================================================================================== -->

<!-- menu tengah bawah --><!-- Footer
=============================================================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2019. Theme Asal Bootstrap Twitter</span>
	</div>
</footer -->

<!-- khas untuk jquery dan js2 lain
=============================================================================================== -->
<script type="text/javascript" src="mainBookRobot2.js"></script>
<!-- script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script -->
<!-- script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script -->

<!-- nota kaki
=============================================================================================== -->
</body>
</html>
[//]: =============================================================================================

---------------------------------------------------------------------------------------------------
# Keterangan Projek Kamus Zine (Sumber Terbuka)

Kamus Zine ialah projek **suku kata bahasa Melayu** berasaskan sumber terbuka. Setiap perkataan
dipecahkan mengikut suku kata supaya mudah dibaca, diucap, dan digunakan dalam pantun, sajak,
puisi, syair, gurindam, seloka, peribahasa, mentera, teromba, nazam, dan bentuk puisi lain.

---------------------------------------------------------------------------------------------------
## Fokus Projek

* Menyediakan repositori **perkataan tradisional dan jarang AI**.
* Menyimpan suku kata, rima, sejarah, dan contoh ayat.
* Menyokong audio sebutan untuk interaktiviti.
* Memudahkan pembangun, penyelidik, dan penulis kreatif menggunakan data.

---------------------------------------------------------------------------------------------------
## Struktur Data (JSON)

```json
{
	"perkataan": "pantun",
	"suku_kata": ["pan", "tun"],
	"kategori": "puisi",
	"asal_usul": "Bahasa Melayu tradisional",
	"contoh": "Pantun itu indah di telinga",
	"audio": "pantun.mp3"
}
```

---------------------------------------------------------------------------------------------------
## PHP & Web Integration

Kamus Zine mudah dihubungkan ke **PHP** supaya data JSON
boleh dipaparkan di web. Contoh ringkas:

```php
<?php
$data = file_get_contents('kamus.json');
$kamus = json_decode($data, true);
foreach ($kamus as $kata)
{
	echo "<h3>" . $kata['perkataan'] . "</h3>";
	echo "<p>Suku kata: " . implode('-', $kata['suku_kata']) . "</p>";
	echo "<p>Contoh: " . $kata['contoh'] . "</p>";
	if(!empty($kata['audio']))
	{
		echo "<audio controls><source src='audio/" . $kata['audio']
		. "' type='audio/mpeg'></audio>";
	}
}
?>
```

---------------------------------------------------------------------------------------------------
## Bootstrap Interface

Kamu boleh guna **Bootstrap 5** untuk paparan interaktif dan cantik. Contoh ringkas:

```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
rel="stylesheet">

<div class="container mt-5">
	<div class="card mb-3">
		<div class="card-body">
		<h5 class="card-title">Pantun</h5>
		<p class="card-text">Suku kata: pan-tun</p>
		<p class="card-text">Contoh: Pantun itu indah di telinga</p>
		<audio controls>
			<source src="audio/pantun.mp3" type="audio/mpeg">
		</audio>
		</div><!-- / class="card-body" -->
	</div><!-- / class="card mb-3" -->
</div><!-- / class="container mt-5" -->
```

Dengan Bootstrap, kita boleh buat card, modal, search filter, dan responsif mobile terus dari JSON.

---------------------------------------------------------------------------------------------------
## Cara Contribute

1. **Fork** repositori ini.
2. **Clone** ke komputer kamu.
3. Tambah perkataan, contoh ayat, atau fail audio.
4. **Push** perubahan dan buat **Pull Request**.

Semua sumbangan akan direkod supaya bahasa Melayu tradisional terus hidup dalam era digital.
---------------------------------------------------------------------------------------------------

[//]: =============================================================================================
# Perkataan Bermula Dengan AB
[//]: =============================================================================================

---------------------------------------------------------------------------------------------------
Berdasarkan definisi **a.ba.da.ba** sebagai hama atau
kuman, berikut adalah penceritaan kreatif dalam pelbagai
genre sastera Melayu mengikut piawaian bahasa yang betul:

---------------------------------------------------------------------------------------------------
### 1. Pantun (Empat Kerat)

> Atuk lepak pondok terbiar\
> Kucing duduk atas riba\
> Kawasan kotor jangan dibiar\
> Tempat bertandang **abadaba**

---------------------------------------------------------------------------------------------------
### 2. Syair (Empat Baris Serangkap, Rima *a-a-a-a*)

Dengarlah kisah sebuah cerita,\
Tentang makhluk halus di mata,\
**Abadaba** namanya diberi warta,\
Membawa penyakit seantero kota.\


Ia membiak di tempat yang cemar,\
Membuatkan badan menjadi nanar,\
Jika kebersihan tidak dicanang benar,\
Kesihatan diri pasti terjejas pudar.

---------------------------------------------------------------------------------------------------
### 3. Gurindam (Dua Baris, Syarat dan Jawab)

Apabila diri mengabaikan cuci,\
**Abadaba** datang singgah di sisi.\

Jika kebersihan tiada dijaga,\
Penyakit hinggap merana raga.\

---------------------------------------------------------------------------------------------------
### 4. Sajak (Bebas dan Simbolik)

**Abadaba**
Di celah jemari yang rakus\
Kau bersembunyi tanpa suara\
Halus tak terlihat mata\
Namun bisamu melumpuhkan karsa.\

Kami sering terlupa\
Bahawa yang kecil itu berbahaya\
Maka di air yang mengalir\
Kami basuh keangkuhan ini\
Agar kau hanyut\
Bersama duka yang tak diundang.\

---------------------------------------------------------------------------------------------------
### 5. Seloka (Sindiran Jenaka)

Aduhai si Manis yang malas mandi,
Bedak tebal menutup daki,
**Abadaba** ketawa menari-nari,
Masuk ke liang menjamu diri,
Badan gatal garu tak berhenti,
Barulah hendak menyesal hati.

---------------------------------------------------------------------------------------------------
### 6. Mentera (Bahasa Berulang dan Magis)

*Om si abadaba,*
*Makhluk halus penghuni cemar,*
*Jangan kau ganggu jasad ini,*
*Hanyutlah kau ke laut dalam,*
*Disapu air, dibakar cahaya,*
*Tawarlah bisamu, tumpurlah kumanmu.*

---------------------------------------------------------------------------------------------------
### 7. Teromba (Kaitan dengan Adat dan Peraturan)

Adat hidup menjaga diri,
Bersih pakaian bersihlah hati,
**Abadaba** dijauh pantang sekali,
Sakit dicegah sebelum menjadi,
Itulah pusaka nenek moyang kami.

---------------------------------------------------------------------------------------------------
### 8. Nazam (Keagamaan/Pujian)

Segala puji bagi Yang Esa,
Mencipta makhluk pelbagai rupa,
Termasuk **abadaba** kuman yang bisa,
Sebagai ujian kepada hamba.

Bersihkan diri setiap waktu,
Ikutlah sunnah nabi yang satu,
Agar penyakit tidak menyatu,
Sihatlah badan amanlah kalbu.

---------------------------------------------------------------------------------------------------
### 9. Peribahasa (Simpulan Bahasa/Ciptaan Baharu)

**Laksana abadaba di air keruh.**
*(Maksud: Sesuatu keburukan atau ancaman yang membiak
dengan cepat di tempat yang tidak terjaga
atau dalam situasi yang kacau-bilau).*

---------------------------------------------------------------------------------------------------
[//]: =============================================================================================
[//]: =============================================================================================

[comment]: <> (This is a comment, it will not be included)
[comment]: <> (in  the output file unless you use it in)
[comment]: <> (a reference style link.)

[//]: <> (This is also a comment.)
[//]: # (This may be the most platform independent comment)

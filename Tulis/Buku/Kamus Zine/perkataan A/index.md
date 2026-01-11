---------------------------------------------------------------------------------------------------
# Keterangan Projek Kamus Zine (Sumber Terbuka)

Kamus Zine ialah projek **suku kata bahasa Melayu** berasaskan sumber terbuka. Setiap perkataan
dipecahkan mengikut suku kata supaya mudah dibaca, diucap, dan digunakan dalam ** pantun, sajak,
puisi, syair, gurindam, seloka, peribahasa, mentera, teromba, nazam,** dan bentuk puisi lain.

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

Dengan Bootstrap, kita boleh buat **card, modal, search filter, dan responsif mobile** terus dari JSON.

---------------------------------------------------------------------------------------------------

## Cara Contribute

1. **Fork** repositori ini.
2. **Clone** ke komputer kamu.
3. Tambah perkataan, contoh ayat, atau fail audio.
4. **Push** perubahan dan buat **Pull Request**.

Semua sumbangan akan direkod supaya **bahasa Melayu tradisional terus hidup dalam era digital**.
---------------------------------------------------------------------------------------------------
===========================================================
---------------------------------------------------------------------------------------------------
# Perkataan Bermula Dengan A
---------------------------------------------------------------------------------------------------
===========================================================
---------------------------------------------------------------------------------------------------
Makna di sebalik perkataan A.
---------------------------------------------------------------------------------------------------
Pertama : A adalah huruf pertama dalam abjad Rumi yang diwaris darI kerajaan Rom katanya.
---------------------------------------------------------------------------------------------------
Kedua : A juga seruan untuk melahirkan kegirangan atau menyatakan persetujuan.

Contoh ayat => itu dia , aaa, macam itu caranya
---------------------------------------------------------------------------------------------------
Ketiga : A juga seruan untuk menunjukkan terlupa akan sesuatu.

Contoh ayat : nama bukunya ... aaa, nanti saya cuba ingatkan. Terlupa pula.
---------------------------------------------------------------------------------------------------
===================================================================================================

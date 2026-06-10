<?php
// 1. Panggil library Parsedown
require 'ParsedownAminLedang.php';
$parsedown = new Parsedown();

// 2. Tetapan Direktori
$directory = "./";
$files = glob($directory . "*.md");

// Dapatkan nama bab untuk navigasi
$senarai_bab = [];
foreach ($files as $file)
{
	$senarai_bab[] = basename($file, ".md");
}

// 3. Logik Membaca Fail (Sistem Navigasi)
$fail_semasa = isset($_GET['bab']) ? $_GET['bab'] : ($senarai_bab[0] ?? '');
$path = $directory . $fail_semasa . ".md";

if (file_exists($path)) {
	$teks_markdown = file_get_contents($path);
	$kandungan_html = $parsedown->text($teks_markdown);
}
else
{
	$kandungan_html = "<h2>Sila pilih bab untuk dibaca.</h2>";
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<title>Paparan Buku Digital</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { perspective: 1500px; background: #e9ecef; }
.book-container { position: relative; width: 100%; max-width: 900px; height: 600px; margin: 50px auto; transform-style: preserve-3d; }
.book-cover, .book-page
{
	position: absolute; width: 100%; height: 100%; top: 0; left: 0; 
	backface-visibility: hidden; transition: transform 1.5s ease-in-out;
}
.book-cover
{
	background: #2c3e50; color: white; display: flex;
	flex-direction: column; justify-content: center; 
	align-items: center; transform-origin: left;
	z-index: 10; cursor: pointer;
}
.book-container.open .book-cover { transform: rotateY(-140deg); }
.book-page { background: white; padding: 40px; overflow-y: auto; z-index: 5; border: 1px solid #ccc; }
</style>
</head>
<body>

<div class="container my-5">
	<div class="book-container" id="bookContainer">
		<div class="book-cover" onclick="document.getElementById('bookContainer').classList.add('open')">
			<h1 class="display-3">Buku Saya</h1>
			<p>Klik untuk buka</p>
		</div>
<!-- ########################################################################################## -->
<div class="book-page">
	<div class="row">
	<div class="col-md-3 border-end">
		<h5>Senarai Bab</h5>
		<ul class="nav flex-column">
		<?php foreach ($senarai_bab as $bab): ?>
		<li class="nav-item"><a class="nav-link" href="?bab=<?= $bab ?>"><?= ucfirst($bab) ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div><!-- / class="col-md-3 border-end" -->
	<div class="col-md-9">
		<article><?= $kandungan_html ?></article>
		<button class="btn btn-sm btn-secondary mt-3" onclick="document.getElementById('bookContainer').classList.remove('open')">Tutup</button>
	</div><!-- / class="col-md-9" -->
	</div><!-- / class="row" -->
</div><!-- / class="book-page" -->
<!-- ########################################################################################## -->
	</div><!-- / -->
</div><!-- / class="container my-5" -->

</body>
</html>
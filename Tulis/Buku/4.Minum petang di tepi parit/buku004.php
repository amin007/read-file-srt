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

// 4. tambah untuk baca bab dan pecahkan ikut muka surat
$index_semasa = array_search($fail_semasa, $senarai_bab);
$bab_sebelum = ($index_semasa > 0) ? $senarai_bab[$index_semasa - 1] : null;
$bab_seterusnya = ($index_semasa < count($senarai_bab) - 1) ? $senarai_bab[$index_semasa + 1] : null;
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
.nav-link.active { border-radius: 5px; }
main
{ 
	line-height: 1.8; /* Jarak baris yang selesa */
	font-size: 1.1rem; /* Saiz teks yang mudah dibaca */
}
article
{
	max-width: 900px; /* Mengehadkan lebar teks agar tidak terlalu panjang */
	margin: 0 auto;   /* Memusatkan teks */
}
</style>
</head>
<body>

<!-- ========================================================================================== -->
<div class="container-fluid vh-100 p-0">
<div class="row h-100 g-0">
<!-- ########################################################################################## -->
<nav class="col-md-3 col-lg-2 bg-dark text-white p-4">
	<h4 class="mb-4">Judul Buku</h4>
	<ul class="nav flex-column">
	<?php foreach ($senarai_bab as $bab): ?>
		<li class="nav-item">
			<a class="nav-link text-light <?= ($fail_semasa == $bab) ? 'active bg-primary' : '' ?>" 
			href="?bab=<?= $bab ?>">
			<?= ucfirst(str_replace('_', ' ', $bab)) ?>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
</nav>
<!-- ########################################################################################## -->
<main class="col-md-9 col-lg-10 p-5 bg-light overflow-auto">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Buku</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?= ucfirst($fail_semasa) ?></li>
		</ol>
	</nav>
	<!-- ****************************************************************************************** -->
	<article class="bg-white p-5 shadow-sm rounded">
		<?php echo $kandungan_html ?>
	</article>
	<!-- ****************************************************************************************** -->
	<nav class="mt-4" aria-label="Navigasi Halaman">
		<ul class="pagination justify-content-between">
		<li class="page-item <?= is_null($bab_sebelum) ? 'disabled' : '' ?>">
			<a class="page-link" href="?bab=<?= $bab_sebelum ?>">« Sebelumnya</a>
		</li>
		<li class="page-item <?= is_null($bab_seterusnya) ? 'disabled' : '' ?>">
			<a class="page-link" href="?bab=<?= $bab_seterusnya ?>">Seterusnya »</a>
		</li>
		</ul>
	</nav>
	<!-- ****************************************************************************************** -->
</main>
<!-- ########################################################################################## -->        
</div>
</div>
<!-- ========================================================================================== -->

</body>
</html>
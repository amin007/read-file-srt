<?php
// 1. Panggil library Parsedown
require 'ParsedownAminLedang.php';
$parsedown = new Parsedown();

// 2. Tetapan Direktori
$directory = "./";
$files = glob($directory . "*.md");

// Dapatkan nama bab untuk navigasi
$senarai_bab = [];
foreach ($files as $file) {
	$senarai_bab[] = basename($file, ".md");
}

// 3. Logik Membaca Fail (Sistem Navigasi)
$fail_semasa = isset($_GET['bab']) ? $_GET['bab'] : ($senarai_bab[0] ?? '');
$path = $directory . $fail_semasa . ".md";

if (file_exists($path))
{
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="gaya.css" rel="stylesheet">
    <title>Paparan Buku Beranimasi</title>
</head>
<body>

    <div class="container my-5">
        <h1 class="text-center mb-4 fw-bold">Pembaca Buku Digital</h1>
        
        <div class="book-container" id="bookContainer">
            <div class="book-cover" onclick="bukaBuku()">
                <h2 class="display-5 fw-bold">Judul Buku Anda</h2>
                <p class="lead mt-3">Klik di sini untuk membuka buku</p>
                <span class="btn btn-light mt-4">Buka Halaman</span>
            </div>
            
            <div class="book-page">
                <article id="kandungan-buku">
                    <?php echo $kandungan_html; ?>
                </article>
            </div>
        </div>
        
        <div class="text-center mt-3">
            <button class="btn btn-outline-secondary" onclick="tutupBuku()">Tutup Buku</button>
        </div>
    </div>

    <script>
        function bukaBuku() {
            const book = document.getElementById('bookContainer');
            if (!book.classList.contains('open')) {
                book.classList.add('open');
            }
        }

        function tutupBuku() {
            const book = document.getElementById('bookContainer');
            if (book.classList.contains('open')) {
                book.classList.remove('open');
            }
        }
    </script>
</body>
</html>
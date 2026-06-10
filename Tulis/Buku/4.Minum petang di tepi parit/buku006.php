<?php
require 'ParsedownAminLedang.php';
$parsedown = new Parsedown();

$fail_semasa = isset($_GET['bab']) ? $_GET['bab'] : 'bab1'; // Anda boleh tukar ke bab pertama secara automatik nanti
$path = "./" . $fail_semasa . ".md";

$kandungan_halaman = "";
$halaman_array = [];
$page_semasa = isset($_GET['page']) ? (int)$_GET['page'] : 0;

if (file_exists($path)) {
    $teks_markdown = file_get_contents($path);
    
    // PHP memotong teks di setiap baris yang mengandungi '---'
    $halaman_array = explode("---", $teks_markdown);
    
    // Pastikan halaman tidak lari
    if ($page_semasa < 0) $page_semasa = 0;
    if ($page_semasa >= count($halaman_array)) $page_semasa = count($halaman_array) - 1;
    
    // Tukar teks kepingan tersebut kepada HTML
    $kandungan_halaman = $parsedown->text($halaman_array[$page_semasa]);
} else {
    $kandungan_halaman = "<h2>Fail tidak dijumpai.</h2>";
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .page-box { background: #fff; padding: 50px; min-height: 400px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="page-box rounded">
            <?= $kandungan_halaman ?>
        </div>

        <!-- Navigasi Halaman -->
        <div class="d-flex justify-content-between mt-4">
            <a href="?bab=<?= $fail_semasa ?>&page=<?= $page_semasa - 1 ?>" 
               class="btn btn-primary <?= ($page_semasa == 0) ? 'disabled' : '' ?>">Sebelumnya</a>
            
            <span>Halaman <?= $page_semasa + 1 ?></span>
            
            <a href="?bab=<?= $fail_semasa ?>&page=<?= $page_semasa + 1 ?>" 
               class="btn btn-primary <?= ($page_semasa >= count($halaman_array) - 1) ? 'disabled' : '' ?>">Seterusnya</a>
        </div>
    </div>
</body>
</html>
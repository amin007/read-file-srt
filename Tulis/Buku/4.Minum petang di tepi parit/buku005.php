<?php
require 'ParsedownAminLedang.php';
$parsedown = new Parsedown();

$directory = "./";
$files = glob($directory . "*.md");

$senarai_bab = [];
foreach ($files as $file) {
    $senarai_bab[] = basename($file, ".md");
}

$fail_semasa = isset($_GET['bab']) ? $_GET['bab'] : ($senarai_bab[0] ?? '');
$path = $directory . $fail_semasa . ".md";
$page_semasa = 0;

if (file_exists($path))
{
    /*$teks_markdown = file_get_contents($path);
    $kandungan_html = $parsedown->text($teks_markdown);*/
   $teks_markdown = file_get_contents($path);
    
    // PHP memotong teks di setiap baris yang mengandungi '---'
    $halaman_array = explode("---", $teks_markdown);
    
    // Pastikan halaman tidak lari
    if ($page_semasa < 0) $page_semasa = 0;
    if ($page_semasa >= count($halaman_array)) $page_semasa = count($halaman_array) - 1;
    
    // Tukar teks kepingan tersebut kepada HTML
    $kandungan_halaman = $parsedown->text($halaman_array[$page_semasa]);	
}
else
{
    $kandungan_html = "<h2>Sila pilih bab untuk dibaca.</h2>";
}

// Logik Navigasi
$index_semasa = array_search($fail_semasa, $senarai_bab);
$bab_sebelum = ($index_semasa !== false && $index_semasa > 0) ? $senarai_bab[$index_semasa - 1] : null;
$bab_seterusnya = ($index_semasa !== false && $index_semasa < count($senarai_bab) - 1) ? $senarai_bab[$index_semasa + 1] : null;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pembaca Buku Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #e9ecef; }
        
        /* Sidebar */
        .sidebar { min-height: 100vh; }
        
        /* Helaian Buku */
        article {
            background: #fff;
            padding: 60px !important;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 0 auto;
            
            /* Menghadkan ketinggian supaya nampak seperti muka surat */
            max-height: 70vh; 
            overflow-y: auto; 
        }
        
        /* Custom Scrollbar untuk Artikel */
        article::-webkit-scrollbar { width: 8px; }
        article::-webkit-scrollbar-thumb { background: #ccc; border-radius: 4px; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 bg-dark text-white p-4 sidebar">
            <h4>Judul Buku</h4>
            <hr>
            <ul class="nav flex-column">
                <?php foreach ($senarai_bab as $bab): ?>
                    <li class="nav-item">
                        <a class="nav-link text-light <?= ($fail_semasa == $bab) ? 'active bg-primary' : '' ?>" href="?bab=<?= $bab ?>">
                            <?= ucfirst(str_replace('_', ' ', $bab)) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <main class="col-md-9 col-lg-10 p-5">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Buku</a></li>
                    <li class="breadcrumb-item active"><?= ucfirst($fail_semasa) ?></li>
                </ol>
            </nav>

            <article class="rounded">
                <?= $kandungan_html ?>
            </article>

            <div class="mt-4 mx-auto" style="max-width: 800px;">
                <div class="d-flex justify-content-between">
                    <a href="?bab=<?= $bab_sebelum ?>" class="btn btn-outline-secondary <?= is_null($bab_sebelum) ? 'disabled' : '' ?>">« Sebelumnya</a>
                    <a href="?bab=<?= $bab_seterusnya ?>" class="btn btn-outline-secondary <?= is_null($bab_seterusnya) ? 'disabled' : '' ?>">Seterusnya »</a>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>
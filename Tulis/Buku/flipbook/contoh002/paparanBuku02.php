<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buku — Jadual Kandungan Automatik</title>

<!-- Paged.js (sama seperti rujukan paparanBuku.php) -->
<script src="https://unpkg.com/pagedjs/dist/paged.polyfill.js"></script>

<style>
/* ====================================================
TETAPAN HALAMAN (CSS Paged Media)
==================================================== */
@page {
size: A4;
margin: 25mm 20mm 25mm 20mm;

/* Pengaki dengan nombor halaman */
@bottom-center {
content: counter(page);
font-family: 'Georgia', serif;
font-size: 10pt;
color: #666;
}
}

/* Halaman pertama — tiada nombor halaman */
@page :first {
@bottom-center {
content: none;
}
}

/* ====================================================
TIPOGRAFI ASAS
==================================================== */
body {
font-family: 'Georgia', 'Times New Roman', serif;
font-size: 11pt;
line-height: 1.8;
color: #222;
}

h1, h2, h3 {
font-family: 'Georgia', serif;
font-weight: bold;
margin-top: 2em;
margin-bottom: 0.5em;
}

h1 { font-size: 20pt; }
h2 { font-size: 15pt; }
h3 { font-size: 12pt; }

p {
text-align: justify;
margin: 0 0 1em 0;
}

/* ====================================================
JADUAL KANDUNGAN — TITIK PEMIMPIN
Menggunakan CSS target-counter untuk nombor
halaman automatik daripada Paged.js
==================================================== */
#jadual-kandungan {
page-break-after: always;
break-after: page;
}

#jadual-kandungan h2.tajuk-toc {
font-size: 18pt;
text-align: center;
border-bottom: 2px solid #333;
padding-bottom: 10px;
margin-bottom: 30px;
}

/* Senarai TOC */
ol.senarai-toc {
list-style: none;
padding: 0;
margin: 0;
}

ol.senarai-toc li {
margin-bottom: 8px;
}

/* Setiap entri TOC — guna CSS leader() untuk titik automatik */
ol.senarai-toc li a {
display: flex;
text-decoration: none;
color: #222;
font-size: 11pt;
align-items: baseline;
}

/* Nombor bab */
.toc-nombor {
min-width: 35px;
font-weight: bold;
flex-shrink: 0;
}

/* Tajuk bab */
.toc-tajuk {
flex-shrink: 0;
}

/* Titik pemimpin */
.toc-titik {
flex: 1;
border-bottom: 1.5px dotted #888;
margin: 0 6px;
position: relative;
top: -3px;
min-width: 10px;
}

/* Nombor halaman — diisi oleh target-counter() */
.toc-halaman::after {
content: target-counter(attr(href), page);
font-size: 10.5pt;
color: #444;
}

/* ====================================================
BAHAGIAN BAB
==================================================== */
.bab {
page-break-before: always;
break-before: page;
}

.bab:first-of-type {
page-break-before: auto;
break-before: auto;
}

.tajuk-bab {
font-size: 16pt;
text-transform: uppercase;
letter-spacing: 2px;
border-left: 5px solid #333;
padding-left: 12px;
margin-bottom: 1.5em;
}

/* ID penyangkut pada setiap bab untuk dirujuk oleh target-counter */
.bab[id] {
/* Paged.js akan baca id ini untuk target-counter */
}
</style>
</head>
<body>

<?php

/* ============================================================
DATA BAB — Ubah suai di sini mengikut kandungan buku anda
============================================================ */
$bab = [
[
'id' => 'bab1',
'nombor' => '1',
'tajuk'  => 'Pengenalan',
'isi'=> 'Bab ini memperkenalkan konsep asas yang akan dibincangkan sepanjang buku ini. Pembaca akan didedahkan kepada latar belakang topik, kepentingannya dalam konteks semasa, dan gambaran keseluruhan struktur buku. Setiap bab dibina atas asas yang diletakkan di sini, menjadikan pemahaman bab pertama ini penting sebelum meneruskan bacaan.',
],
[
'id' => 'bab2',
'nombor' => '2',
'tajuk'  => 'Latar Belakang dan Sejarah',
'isi'=> 'Sejarah sesuatu bidang sering kali memberikan konteks yang amat berguna untuk memahami perkembangan semasa. Bab ini meneliti peristiwa-peristiwa penting yang membentuk bidang ini, tokoh-tokoh yang menyumbang secara besar, serta evolusi pemikiran dari zaman awal hingga kini. Pemahaman sejarah ini memberi asas kukuh untuk bab-bab seterusnya.',
],
[
'id' => 'bab3',
'nombor' => '3',
'tajuk'  => 'Konsep Asas dan Teori',
'isi'=> 'Teori merupakan tulang belakang sebarang bidang ilmu. Dalam bab ini, beberapa teori utama dikupas secara mendalam. Pembaca akan memahami bagaimana teori-teori ini saling berkait, di mana mereka berbeza, dan bagaimana pengamal menggunakannya dalam kerja harian mereka. Contoh-contoh praktikal turut disertakan bagi memudahkan kefahaman.',
],
[
'id' => 'bab4',
'nombor' => '4',
'tajuk'  => 'Kaedah dan Pendekatan',
'isi'=> 'Pelbagai kaedah telah dibangunkan untuk menangani cabaran dalam bidang ini. Bab ini membandingkan pendekatan kuantitatif dan kualitatif, membincangkan kelebihan dan kelemahan masing-masing, serta memandu pembaca dalam memilih kaedah yang paling sesuai untuk keperluan mereka. Kajian kes turut dimuatkan bagi menggambarkan aplikasi sebenar.',
],
[
'id' => 'bab5',
'nombor' => '5',
'tajuk'  => 'Perbincangan dan Analisis Dapatan',
'isi'=> 'Dapatan kajian perlu dianalisis dengan teliti sebelum sebarang kesimpulan dapat dibuat. Bab ini membimbing pembaca melalui proses analisis data, interpretasi hasil, dan cara membentangkan dapatan dengan jelas dan berkesan. Aspek etika dalam pelaporan data juga diberi perhatian wajar.',
],
[
'id' => 'bab6',
'nombor' => '6',
'tajuk'  => 'Kesimpulan dan Hala Tuju Masa Depan',
'isi'=> 'Bab penutup ini merumuskan poin-poin utama yang telah dibincangkan sepanjang buku, menghubungkan semula kepada objektif asal yang ditetapkan dalam bab pertama. Selain itu, bab ini mengenal pasti jurang pengetahuan yang masih ada dan mencadangkan arah kajian masa depan yang berpotensi untuk diterokai oleh penyelidik dan pengamal bidang ini.',
],
];

?>

<!-- ========================================================
 HALAMAN JADUAL KANDUNGAN
======================================================== -->
<section id="jadual-kandungan">
<h2 class="tajuk-toc">Jadual Kandungan</h2>

<ol class="senarai-toc">
<?php foreach ($bab as $item): ?>
<li>
<a href="#<?= htmlspecialchars($item['id']) ?>">
<span class="toc-nombor">Bab <?= htmlspecialchars($item['nombor']) ?>.</span>
<span class="toc-tajuk"><?= htmlspecialchars($item['tajuk']) ?></span>
<span class="toc-titik" aria-hidden="true"></span>
<span class="toc-halaman"></span>
</a>
</li>
<?php endforeach; ?>
</ol>
</section>


<!-- ========================================================
 ISI KANDUNGAN BAB
======================================================== -->
<?php foreach ($bab as $item): ?>
<section id="<?= htmlspecialchars($item['id']) ?>" class="bab">
<h1 class="tajuk-bab">
Bab <?= htmlspecialchars($item['nombor']) ?> — <?= htmlspecialchars($item['tajuk']) ?>
</h1>

<p><?= htmlspecialchars($item['isi']) ?></p>

<!-- Teks pengisi untuk menambah panjang halaman (buang dalam penggunaan sebenar) -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
</section>
<?php endforeach; ?>


<!-- ========================================================
 SKRIP: Paged.js — untuk nombor halaman automatik
 (sama pendekatan seperti paparanBuku.php rujukan)
======================================================== -->
<script>
// Tunggu Paged.js selesai merender semua halaman
// barulah kita boleh baca nombor halaman sebenar
window.PagedPolyfill.on('rendered', (flow) => {
console.log('Paged.js: ' + flow.total + ' halaman dihasilkan.');

// Kemas kini nombor halaman dalam TOC secara manual
// sebagai sandaran jika target-counter tidak berfungsi
// di semua pelayar
const pautan = document.querySelectorAll('.senarai-toc a');

pautan.forEach(pautan => {
const href = pautan.getAttribute('href');
const idSasaran = href ? href.replace('#', '') : null;

if (idSasaran) {
// Cari elemen sasaran
const elemSasaran = document.getElementById(idSasaran);

if (elemSasaran) {
// Cari halaman Paged.js yang mengandungi elemen ini
const halamanPaged = elemSasaran.closest('.pagedjs_page');

if (halamanPaged) {
const noHalaman = halamanPaged.getAttribute('data-page-number');
const spanHalaman = pautan.querySelector('.toc-halaman');

if (spanHalaman && noHalaman) {
spanHalaman.textContent = noHalaman;
}
}
}
}
});
});
</script>

</body>
</html>
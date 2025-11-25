<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="utf-8">
<title>Buku (.md) Auto — StPageFlip API Version</title>

<link href="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/src/Style/stPageFlip.min.css" rel="stylesheet">
<style>
body {
font-family: sans-serif;
background: #f5f7fa;
margin: 0;
padding: 0;
}
#flipbook-container {
width: 1800px;
height: 1200px;
margin: auto;
margin-top: 40px;
}
.page {
padding: 40px;
font-size: 24px;
line-height: 1.6;
}
.page h1, .page h2, .page h3 {
margin-top: 0;
}
</style>
</head>

<body>

<div id="flipbook-container">
<div id="flipbook"></div>
</div>

<!-- StPageFlip Library -->
<script src="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/dist/js/page-flip.browser.min.js"></script>

<!-- Markdown Converter -->
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

<script>
async function loadBookPages() {

// 1. Ambil senarai fail .md daripada API
const listResponse = await fetch("index_en.php?action=list");
const listData = await listResponse.json();
const mdFiles = listData.files.map(f => f.name);

// 2. Sediakan array elemen HTML untuk setiap bab
const pages = [];

for (let file of mdFiles) {
const res = await fetch("index_en.php?file=" + file);
const text = await res.text();

const html = marked.parse(text);

const page = document.createElement("div");
page.className = "page";
page.innerHTML = html;

pages.push(page);
}

// 3. Inisialisasi StPageFlip
const flip = new St.PageFlip(document.getElementById("flipbook"), {
width: 800,
height: 800,
size: "fixed",
maxShadowOpacity: 0.4,
showCover: false,
});

// 4. Load halaman menggunakan HTML Node
flip.loadFromHTML(pages);
}

loadBookPages();
</script>

</body>
</html>

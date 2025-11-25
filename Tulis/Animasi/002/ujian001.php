<!doctype html>
<html lang="ms">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Flipbook MD — StPageFlip (Auto .md)</title>

<style>
:root{
--bg:#f6f7fb;
--text:#111;
--page-bg:#fff;
--page-text:#111;
--accent:#2d8cff;
--shadow: rgba(0,0,0,0.25);
}
body.dark{
--bg:#0f1113;
--text:#e8e8ea;
--page-bg:#191b1d;
--page-text:#f7f7f7;
--accent:#4aa3ff;
--shadow: rgba(0,0,0,0.6);
}

*{box-sizing:border-box}
body{
margin:0;
font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, Arial;
background:var(--bg);
color:var(--text);
-webkit-font-smoothing:antialiased;
-moz-osx-font-smoothing:grayscale;
}
.app { max-width:1200px; margin:18px auto; padding:14px; }
.header { display:flex; align-items:center; justify-content:space-between; gap:12px; margin-bottom:12px; }
.header .left { line-height:1; }
.controls { display:flex; gap:8px; align-items:center; }

button, select { border:0; background:var(--accent); color:white; padding:8px 12px; border-radius:6px; cursor:pointer; }
button.secondary { background:transparent; color:var(--text); border:1px solid rgba(0,0,0,0.06); }
button.small { padding:6px 8px; font-size:13px; }

.layout { display:flex; gap:16px; align-items:flex-start; }

/* TOC */
.toc { width:260px; background: rgba(255,255,255,0.7); padding:8px; border-radius:8px; border:1px solid rgba(0,0,0,0.06); max-height:72vh; overflow:auto; }
body.dark .toc { background: rgba(255,255,255,0.02); border-color: rgba(255,255,255,0.04); }
.toc h4 { margin:6px 0 8px; font-size:14px; }
.toc button { display:block; width:100%; text-align:left; padding:8px; margin-bottom:6px; background:transparent; border-radius:6px; border:1px solid transparent; color:var(--text); }
.toc button.active { background:var(--accent); color:white; border-color:var(--accent); }

/* Book container (StPageFlip will require a container element) */
.viewer {
flex:1;
display:flex;
justify-content:center;
align-items:center;
min-height:72vh;
}

/* StPageFlip expects pages inside a container; we'll set small global styles for pages we generate */
.page {
width:100%;
height:100%;
padding:28px;
overflow:auto;
background:var(--page-bg);
color:var(--page-text);
border-radius:6px;
box-shadow: 0 10px 30px var(--shadow);
}

/* page footer number */
.pnum { text-align:right; font-size:12px; opacity:0.6; margin-top:12px; }

/* responsive */
@media (max-width:980px) {
.layout { flex-direction:column; }
.toc { width:100%; order:2; }
.viewer { order:1; width:100%; }
}
</style>

<!-- marked.js (Markdown -> HTML) -->
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

<!-- PageFlip / StPageFlip (CDN build) -->
<link href="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/src/Style/stPageFlip.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/dist/js/page-flip.browser.min.js"></script>

</head>
<body>

<?php /*
<!-- # menu kiri -->
<aside class="toc" id="toc">
<h4>Senarai Bab</h4>
<div id="toc-list">Memuat turun senarai…</div>
</aside>
*/?>

<!-- # menu tengah -->
<div class="app" style="background: lightblue">
	<div class="header">
		<div class="left">
		<strong>Buku (auto .md) — StPageFlip</strong><br>
		<small>Tanpa cover — setiap .md jadi satu halaman</small>
		</div>

		<div class="controls">
		<button id="prevBtn" class="small">Sebelum</button>
		<button id="nextBtn" class="small">Seterusnya</button>
		<button id="themeToggle" class="small secondary">Tema Gelap/Terang</button>
		<select id="speed" title="Kelajuan animasi" class="small">
		<option value="400">Pantas</option>
		<option value="700" selected>Sederhana</option>
		<option value="1100">Lambat</option>
		</select>
		</div>
	</div>

	<div class="layout">
		<div class="viewer"><!-- StPageFlip container -->
			<div id="flipbook" style="width:820px; height:520px;"></div>
		</div>
	</div>

<!-- ========================================================================================== -->
</div><!-- // class="app" -->

<script>
/*
Guna API endpoint yang anda muat naik:
- Senarai: /mnt/data/index_en.php?action=list
- Fail: /mnt/data/index_en.php?file=nama.md

Tukar API_ENDPOINT kepada URL sebenar bila deploy.
*/
const API_ENDPOINT = 'index_en.php'; // gunakan path yang dimuat naik
let animDuration = 700; // dikawal oleh select

// util fetch list
async function fetchList() {
const res = await fetch(API_ENDPOINT + '?action=list');
if (!res.ok) throw new Error('Gagal dapatkan senarai');
const j = await res.json();
if (!j.ok) throw new Error('API error');
return j.files; // array objek {name,size,mtime}
}

// util fetch markdown
async function fetchMd(name) {
const res = await fetch(API_ENDPOINT + '?file=' + encodeURIComponent(name));
if (!res.ok) throw new Error('Gagal muatkan ' + name);
return res.text();
}

let pageFlip = null;
let pagesDOM = []; // array elemen .page
let fileList = [];

// build TOC and pages (lazy convert each md -> page HTML)
async function build() {
const tocList = document.getElementById('toc-list');
tocList.textContent = 'Memuat turun senarai…';
try {
const files = await fetchList();
fileList = files;
if (!files.length) {
tocList.innerHTML = '<p>Tiada fail .md ditemui.</p>';
return;
}
tocList.innerHTML = '';
// prepare container for pages
const flipContainer = document.getElementById('flipbook');
flipContainer.innerHTML = ''; // clear

// create page elements from files (content empty for now; lazy load on demand)
for (let i=0;i<files.length;i++){
const f = files[i];
// TOC button
const btn = document.createElement('button');
btn.textContent = f.name;
btn.addEventListener('click', ()=> pageFlip.flip(i));
tocList.appendChild(btn);

// page element (StPageFlip wants a container with page children)
const pg = document.createElement('div');
pg.className = 'page';
// insert placeholder content; we'll fill real HTML when page becomes visible (onFlip)
pg.innerHTML = '<div class="page-content"><em>Muat turun...</em></div><div class="pnum">${i+1}</div>';
flipContainer.appendChild(pg);
pagesDOM.push(pg);
}

// init StPageFlip
pageFlip = new St.PageFlip(flipContainer, {
width: 820,//width: 820,
height: 320,//height: 520,
size: "stretch",
minWidth: 300,
maxWidth: 1600,
maxHeight: 1200,
showCover: false, // tiada cover
mobileScrollSupport: false
});

// load pages from DOM (StPageFlip will wrap them into book)
pageFlip.loadFromHTML(document.querySelectorAll('#flipbook .page'));

// event: when page changed, lazy-load visible pages (current, prev, next)
pageFlip.on("flip", async (e) => {
const pageIndex = e.data; // current page (0-based)
highlightTOC(pageIndex);
// load nearby pages to avoid flicker
await Promise.all([pageIndex-1, pageIndex, pageIndex+1].map(i => {
if (i>=0 && i<fileList.length) return ensureLoaded(i);
return Promise.resolve();
}));
});

// initial highlight
highlightTOC(0);
// preload first two
await ensureLoaded(0);
if (fileList.length>1) await ensureLoaded(1);

} catch (err) {
tocList.innerHTML = '<p style="color:red">Ralat: ${err.message}</p>';
console.error(err);
}
}

// ensure a page's markdown has been converted & injected
async function ensureLoaded(index) {
const dom = pagesDOM[index];
if (!dom) return;
if (dom.dataset.loaded === '1') return;
try {
dom.querySelector('.page-content').innerHTML = '<em>Muat turun kandungan…</em>';
const md = await fetchMd(fileList[index].name);
const html = marked.parse(md);
dom.querySelector('.page-content').innerHTML = html;
dom.dataset.loaded = '1';
} catch (err) {
dom.querySelector('.page-content').innerHTML = '<p style="color:red">Gagal muatkan.</p>';
console.error(err);
}
}

function highlightTOC(idx) {
const buttons = document.querySelectorAll('#toc-list button');
buttons.forEach((b,i)=> b.classList.toggle('active', i===idx));
}

// navigation buttons
document.getElementById('nextBtn').addEventListener('click', ()=> {
if (!pageFlip) return;
pageFlip.flipNext();
});
document.getElementById('prevBtn').addEventListener('click', ()=> {
if (!pageFlip) return;
pageFlip.flipPrevious();
});

// theme toggle
document.getElementById('themeToggle').addEventListener('click', ()=> {
document.body.classList.toggle('dark');
});

// animation speed control
document.getElementById('speed').addEventListener('change', (e)=>{
animDuration = parseInt(e.target.value,10);
if (pageFlip) pageFlip.updateState({ flippingTime: animDuration });
});

// keyboard
window.addEventListener('keydown', (e)=>{
if (!pageFlip) return;
if (e.key === 'ArrowRight') pageFlip.flipNext();
if (e.key === 'ArrowLeft') pageFlip.flipPrevious();
});

// start build
build();
</script>
</body>
</html>
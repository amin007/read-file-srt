<?php
// index_en.php
// API untuk auto-detect fail .md dan pulangkan kandungan .md

header('Content-Type: application/json; charset=utf-8');
#--------------------------------------------------------------------------------------------------
// Folder markdown (relatif kepada fail ini)
$baseDir = __DIR__ . '/md/data/';
#--------------------------------------------------------------------------------------------------
// Sanitize nama fail
function safe_name($name) {
	$name = basename($name); // halang ../
	if (pathinfo($name, PATHINFO_EXTENSION) !== 'md') return '';
	return preg_replace('/[^A-Za-z0-9_\-\.]/', '', $name);
}
#--------------------------------------------------------------------------------------------------
// Jika permintaan adalah senarai: /index_en.php?action=list
if (isset($_GET['action']) && $_GET['action'] === 'list')
{
	$files = [];
	if (is_dir($baseDir)) {
	foreach (scandir($baseDir) as $f) {
	if ($f === '.' || $f === '..') continue;
	if (pathinfo($f, PATHINFO_EXTENSION) === 'md') {
	$files[] = [
	'name' => $f,
	'size' => filesize($baseDir.'/'.$f),
	'mtime' => filemtime($baseDir.'/'.$f)
	];
	}
	}
	}
	echo json_encode(['ok'=>true,'files'=>$files], JSON_PRETTY_PRINT);
	exit;
}
#--------------------------------------------------------------------------------------------------
// Jika permintaan adalah file: /index_en.php?file=nama.md
if (isset($_GET['file']))
{
	header('Content-Type: text/plain; charset=utf-8');
	$name = safe_name($_GET['file']);
	if (!$name) { http_response_code(400); echo "Invalid filename"; exit; }

	$full = $baseDir.'/'.$name;
	if (!is_file($full)) { http_response_code(404); echo "Not found"; exit; }

	readfile($full);
	exit;
}
#--------------------------------------------------------------------------------------------------
// Default
echo json_encode(['ok'=>false,'error'=>'No action']);

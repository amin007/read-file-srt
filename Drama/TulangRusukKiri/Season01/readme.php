<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Pengembaraan hero mencari cinta hatinya.
Gunakan konsep oop aka pengaturcaraan berasaskan objek dalam menerangkan konsep programming kepada orang awam.">
<meta name="author" content="Amin007 Ledang">
<title>Drama TulangRusukKiri</title>
<link href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
# https://github.com/erusev/parsedown
include '../../../function/Parsedown.php';
$Parsedown = new Parsedown();
$markdown = file_get_contents('readme.md');
echo $Parsedown->text($markdown);

?>

<!-- Footer
==================================================
https://hackerthemes.com/bootstrap-cheatsheet/
</footer -->

<!-- khas untuk jquery dan js2 lain
================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

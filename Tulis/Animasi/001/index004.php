<?php
$tajukBuku = 'Pengenalan Kepada ...';
$mukaSebelum = 'Sebelum';//'Previous page';
$mukaSelepas = 'Selepas';//'Next page';
//$mukaSurat = [1,2,3,4,5,6];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="static/demoStyle3.css">
<?php // link rel="stylesheet" href="static/aminStyle.css" ?>

<title><?php echo $tajukBuku ?></title>
</head>
<body>

<div class="mb-3 mt-2">
<!-- ========================================================================================== -->
	<div class="container">
		<h4 style="text-transform: uppercase"><?php echo $tajukBuku ?></h4>
		<div class="row">
		<div class="col-md-7">
			<div class="row mt-2">
				<div class="col-md-6" style="min-width:300px">
					<button type="button" class="btn btn-info btn-sm btn-prev"><?php echo $mukaSebelum ?></button>
					[<span class="page-current">1</span> dari <span class="page-total">-</span>]
					<button type="button" class="btn btn-info btn-sm btn-next"><?php echo $mukaSelepas ?></button>
				</div><!-- / class="col-md-6" style="min-width: 300px" -->
				<div class="col-md-6">Keadaan: <i class="page-state">read</i>,
					Kedudukan: <i class="page-orientation">landscape</i></div>
			</div><!-- / class="row mt-2" -->
		</div><!-- / class="col-md-7" -->
		</div><!-- / class="row" -->
	</div><!-- / class="row" -->
<!-- ========================================================================================== -->
<!-- # kandungan -->
<!-- ========================================================================================== -->
	<div class="container-md" style="position: relative">
	<div class="flip-book html-book demo-book" id="demoBookExample" style="background-image: url('images/background.jpg')">
	<!-- ========================================================================================== -->
		<section class="page page-cover page-cover-top" data-density="hard">
			<div class="page-content">
				<h2>TAJUK BUKU</h2>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== --><?php
for($mukaSurat = 1; $mukaSurat <= 10; $mukaSurat++):
echo "\r\n\t\t"; ?><section class="page">
			<div class="page-content">
				<h2 class="page-header">Bab <?php echo $mukaSurat ?></h2>
				<div class="page-text"><h4>Apa itu Lorem Ipsum?</h4><!-- # class="page-text" hanya 24 baris sahaja -->
<p>Lorem Ipsum adalah text contoh digunakan didalam industri pencetakan dan typesetting. Lorem Ipsum telah menjadi text contoh semenjak tahun ke 1500an, apabila pencetak yang kurang terkenal mengambil sebuah galeri cetak dan merobakanya menjadi satu buku spesimen. Ia telah bertahan bukan hanya selama lima kurun, tetapi telah melonjak ke era typesetting elektronik, dengan tiada perubahan ketara. Ia telah dipopularkan pada tahun 1960an dengan penerbitan Letraset yang mebawa kangungan Lorem Ipsum, dan lebih terkini dengan sofwer pencetakan desktop seperti Aldus PageMaker yang telah menyertakan satu versi Lorem Ipsum.</p>
<h4>Mengapa kami menggunakannya?</h4>
<p>Adalah menjadi satu fakta bahawa pembaca akan terganggu oleh text yang boleh difahami apabila melihat susunan mukasurat. Kegunaan Lorem Ipsum adalah kerana ia mempunyai susunan ayat yang kelihatan normal, yang lebih menarik berbeza dengan "Contoh disini, contoh disini". Ia menyerupai text yang boleh dibaca dalam bahasa Inggeris. Banyak pakej pencetakan desktop dan editor web sekarang menggunakan Lorem Ipsum sebagai model text, dan satu search "Lorem Ipsum" dapat memperlihatkan sejumlah website yang masih dalam persiapan. Pelbagai versi telah timbul dalam tahun tahun yang lepas, kadangkala secara sepontan, dan kadangkala di sengajakan (seperti selitan lawak jenaka dan sebagainya).</p>
<h4>Dari mana asal nya?</h4>
<p>Berbeza dari pendapat umum yang popular, Lorem Ipsum bukan karya text secara rambang. Ia menpunyai asal usul dari secebis sastera klasik Latin dari kurun 45 TM (Tahum Masihi) , menjadikan ia karya berusia lebih 2000 tahun. Richard McClintock, seorang professor bahasa di Latin di Hampden-Sydney College in Virginia, USA, telah menyelidik salah satu ayat Latin yang kurang difahami, "consectetur" dan dalam menelitikan pengunaan perkataan ini dalam karya klasikal, telah menjumpai asal perkataan "consectetur" ini. Lorem Ipsum berasal dari seksyen 1.10.32 dan 1.10.33 karya "de Finibus Bonorum et Malorum" (Kebaikan dan Kejahan Yang Ekstrim) oleh Cicero, ditulis pada 45 SM. Buku ini ialah satu peniliitian tentang teori etika, dan amat popular pada zaman Renaissance. Ayat pertama Lorem Ipsum, "Lorem ipsum dolor sit amet..", datangnya dari ayat terkadung didalam seksyen 1.10.32.</p>
<p>Sejumlah text seragam Lorem Ipsum yang digunakan semenjak 1500an di terbitkan di bawah ini untuk mereka yang berminat. Seksyen 1.10.32 dan 1.10.33 from "de Finibus Bonorum et Malorum" oleh Cicero juga disertakan seperti kandungan asal, dan disusuli dengan versi Inggeris semenjak tahun 1914, yang di terjemah oleh H. Rackham.</p>
<p>Ada banyak versi dari mukasurat-mukasurat Lorem Ipsum yang sedia ada, tetapi kebanyakkannya telah diubahsuai, lawak jenaka diselitkan.</p></div><!-- / class="page-text" hanya 24 baris sahaja -->
				<div class="page-footer"><?php echo ($mukaSurat+1) ?></div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== --><?php
endfor; echo "\r\n"; ?>
		<section class="page page-cover page-cover-bottom" data-density="hard">
			<div class="page-content">
				<h2>SUDAH TAMAT</h2>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
	</div><!-- / class="flip-book html-book demo-book" -->
    </div><!-- / class="container-md" style="position: relative" -->
<!-- ========================================================================================== -->
</div><!-- / class="mb-3 mt-2" -->

<!-- ========================================================================================== -->
<!-- Place this tag in your head or just before your close body tag. -->
<script>
/*const pageFlip = new PageFlip(document.getElementById("tajukBuku"),
	{
		width: 400, // required parameter - base page width
		height: 600,  // required parameter - base page height
		showCover: true
	}
);*/
</script>
<script src="static/pagesDemo3.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

<!-- ========================================================================================== -->
<!-- nota kaki -->
</body>
</html>
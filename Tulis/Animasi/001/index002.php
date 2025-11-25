<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="static/demoStyle3.css">

    <title>StPageFlip - Simple library for creating realistic page turning effects</title>
    <meta name="description"
          content="Powerful, simple and flexible JS Library for creating realistic and beautiful page turning effect.">
    <meta name="keywords"
          content="javascript, typescript, npm, library, js, book, page, turn, flip, fold">
</head>
<body>

<div class="mb-3 mt-2">
<!-- ========================================================================================== -->
	<div class="container">
		<h4 style="text-transform: uppercase">DEMO</h4><hr>
		<div class="row">
			<div class="col-md-7">
				<div class="row mt-2">
					<div class="col-md-6" style="min-width: 290px">
						<button type="button" class="btn btn-info btn-sm btn-prev">Previous page</button>
						[<span class="page-current">1</span> of <span class="page-total">-</span>]
						<button type="button" class="btn btn-info btn-sm btn-next">Next page</button>
					</div><!-- / class="col-md-6" style="min-width: 290px" -->
					<div class="col-md-6">State: <i class="page-state">read</i>, orientation: <i class="page-orientation">landscape</i></div>
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
				<h2>BOOK TITLE</h2>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 1</h2>
				<div class="page-image" style="background-image: url(images/html/1.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">2</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 2</h2>
				<div class="page-image" style="background-image: url(images/html/2.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">3</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 3</h2>
				<div class="page-image" style="background-image: url(images/html/3.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">4</div>
 			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page hard" data-density="hard">
			<div class="page-content">
				<h2 class="page-header">HARD Page header - 4</h2>
				<div class="page-image" style="background-image: url(images/html/4.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">5</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page hard" data-density="hard">
			<div class="page-content">
				<h2 class="page-header">HARD Page header - 5</h2>
				<div class="page-image" style="background-image: url(images/html/5.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">6</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 6</h2>
				<div class="page-image" style="background-image: url(images/html/6.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">7</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 7</h2>
				<div class="page-image" style="background-image: url(images/html/7.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">8</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 8</h2>
				<div class="page-image" style="background-image: url(images/html/8.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">9</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 9</h2>
				<div class="page-image" style="background-image: url(images/html/1.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">10</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 10</h2>
				<div class="page-image" style="background-image: url(images/html/2.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">11</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 11</h2>
				<div class="page-image" style="background-image: url(images/html/3.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">12</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page hard" data-density="hard">
			<div class="page-content">
				<h2 class="page-header">HARD Page header - 12</h2>
				<div class="page-image" style="background-image: url(images/html/4.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">13</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page hard" data-density="hard">
			<div class="page-content">
				<h2 class="page-header">HARD Page header - 13</h2>
				<div class="page-image" style="background-image: url(images/html/5.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">14</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 14</h2>
				<div class="page-image" style="background-image: url(images/html/6.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">15</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 15</h2>
				<div class="page-image" style="background-image: url(images/html/7.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">16</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page">
			<div class="page-content">
				<h2 class="page-header">Page header - 16</h2>
				<div class="page-image" style="background-image: url(images/html/8.jpg)"></div>
				<div class="page-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna. Aliquam ac nulla rhoncus, accumsan eros sed, viverra enim. Pellentesque non justo vel nibh sollicitudin pharetra suscipit ut ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus mollis nibh, non convallis ex convallis eu. Suspendisse potenti. Aenean vitae pellentesque erat. Integer non tristique quam. Suspendisse rutrum, augue ac sollicitudin mollis, eros velit viverra metus, a venenatis tellus tellus id magna.
				</div><!-- / class="page-text" -->
				<div class="page-footer">17</div>
			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
		<section class="page page-cover page-cover-bottom" data-density="hard">
			<div class="page-content">
				<h2>THE END</h2>
  			</div><!-- / class="page-content" -->
		</section><!-- /  class="page" -->
	<!-- ========================================================================================== -->
	</div><!-- / class="flip-book html-book demo-book" -->
    </div><!-- / class="container-md" style="position: relative" -->
<!-- ========================================================================================== -->
</div><!-- / class="mb-3 mt-2" -->

<script src="static/pagesDemo3.bundle.js"></script>
<!-- ========================================================================================== -->
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
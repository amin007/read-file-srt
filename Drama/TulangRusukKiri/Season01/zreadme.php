<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<textarea style="width:100%; height:600px"></textarea>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" data-semver="2.2.0" data-require="jquery"></script>
<script>
$(function() {
	$.get("readme.md", function(data)
	{
		$('textarea').val(data)
		console.log(data); // this is not called !!
	});
	console.log('end logging');
});
</script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>
		@yield('title', 'Shopping List (P4)')
	</title>
	
	<meta charset='utf-8'>
	<?php $cssFilemtime = filemtime($_SERVER['DOCUMENT_ROOT'] . '\\css\\main.css');?>
	<link href="css/main.css?v={{$cssFilemtime}}" type='text/css' rel='stylesheet'>
	@stack('head')

</head>
<body>
<?php
echo("test");
//<link type="text/css" rel="stylesheet" href="<https://' . $_SERVER['SERVER_NAME'] . '/includes/css/generic.css?v=' . filemtime($_SERVER[>"DOCUMENT_ROOT"] . '/includes/css/generic.css') . '" />'

echo filemtime($_SERVER['DOCUMENT_ROOT'] . '\\css\\main.css');

?>
	<header>
		
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
	</footer>

    @stack('body')

</body>
</html>
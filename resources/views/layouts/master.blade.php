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

	<header>
		
	</header>

	<section>
		<h1 class='mycenter'>Alan Martinson - P4 For CSCI E15</h1>
		@yield('topofpage')
	
		<a href="/">Home</a>  
		<br/><a href="/manageitems">Manage Items</a>
		<br/><a href="/managelistnames">Manage List Names</a>
		<br/>
		<br/>
    
		@yield('content')
	</section>

	<footer>
	</footer>

    @stack('body')

</body>
</html>
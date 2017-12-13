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
    @if(session('usermessage'))
        <div class='usermessage'>
            {{ session('usermessage') }}
        </div>
    @endif

    <header>
    </header>

    <section>
	    <h1 class='mycenter'>Alan Martinson - P4 For CSCI E15</h1>
	    @yield('topofpage')
	    <div class="mycenter">
		    <a href="/" class="button">Home</a>  
		    <a href="/manageitems" class="button">Manage Items</a>
		    <a href="/managelistnames" class="button">Manage List Names</a>
	    </div>
	    <br/>
	    <br/>

	    @yield('content')
    </section>

    <footer>
    </footer>

    @stack('body')

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ground</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<ul class="nav">
		  <li class="nav-item">
		    <a class="nav-link" href="/">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/about">About Us</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/contact">Contact Us</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="/customers">Customer List</a>
		  </li>
		</ul>
		@yield('content')
	</div>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
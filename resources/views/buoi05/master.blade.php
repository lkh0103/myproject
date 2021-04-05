<!DOCTYPE html> 
<html lang="en"> 

	<head> 
		 <meta charset="UTF-8"> 
		 <title>@yield('title')</title> 
		 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head> 
	<body>
		
		<h2>Tiêu đề từ template</h2>
		@yield('content')
		@section('content')
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>

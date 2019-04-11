<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Project</title>
</head>
<body>
	<div class="header">This is header</div>
	{{-- Load Content - yield load sections--}}
	@yield('content')

	<div class="footer">This is footer</div>
</body>
</html>
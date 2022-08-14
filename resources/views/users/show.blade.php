<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show</title>
</head>
<body>
<h3>Bu User controllerdan kelayotgan foydalanuvchining ismi {{ $username }}</h3>

	<ul>
		@foreach($plaa as $plan)
		<li>{{ $plan }}</li>
		@endforeach
	</ul>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List</title>
</head>
<body>
	<ul>
		<h2>Foydalanuvchilar ro'yxati</h2>
	@foreach($users as $user)
		<li>
			{{ $user }}
		</li>
	@endforeach		
	</ul>
</body>
</html>
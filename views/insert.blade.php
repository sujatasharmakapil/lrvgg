<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="{{url('/insert')}}" method="post">
    @csrf 

		<input type="text" name="name"><br/>
		<input type="email" name="email"><br/>
		<input type="password" name="password"><br/>
		<input type="file" name="image"><br/>
		<input type="submit" name="btn">
	</form>

</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
	</head>
	<body>

<div class="row">
	
	<div class="col-md-offset-4">
	<center>
		<form action="/store" enctype="multipart/form-data" method="post">
		{{csrf_field()}}
		<h1>File upload</h1>
		<br>
		<input type="file" name="image">
		<br>
		<input type="submit" value="upload">
		</form>
		</center>
	</div>
</div>



		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
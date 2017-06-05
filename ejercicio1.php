<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>Permutaciones posibles: </h3>
				<label for="txtPermutar">String</label>
				<input type="text" id="txtPermutar" value="" placholder="Escriba el String a permutar." />
				<button id="btnPermuta" class="	glyphicon glyphicon-random" onclick="setPermutar();"></button>
				<hr/>				
				<p id="array"></p>
			</div>
		</div>
	</div>
	

	
	<script type="text/javascript" src="js/ejercicio1.js"></script>

</body>
</html>
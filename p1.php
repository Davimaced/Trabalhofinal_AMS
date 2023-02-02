<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>formulário php</title>
</head>
<body>
    <div class= "container">

<form enctype="multipart/form-data" method="GET" action="p2.php">
<div class="form-group">
<p> Nome <input type="text" name="nome" size=30> </p>
</div>

<div class="form-group">
    <p> Idade <input type="text" name="idade" size=2> </p>

</div>
<div class="form-group">
<p> Qual o carro que mais gostas?
<select name="marca">
	<option> Ferrari </option>
	<option> Mercedes </option>
	<option> BMW </option>
</select> </p>
</div>
<div class="form-group">
<p> <input type="submit" value="OK"> </p>
</div>
</form>
</body>
</html>
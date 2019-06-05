<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="css/estilo.css"
<title>Monitor de Redes</title>
<?php require_once 'action/db_connect.php'; ?>
</head>
<body>
<div class="container">
<h1 style="background-color:DodgerBlue;">Monitor de Redes</h1>
<form method="post" class="form-inline" action="action/insert.php">
<div class="row">

<div class="col">
<input type="text" placeholder="Nome" name="nomecomputador" class="form-control">
</div>


<div class="col">
<input type="text" placeholder="IP" name="ip" class="form-control">
</div>
<input type="submit" class="btn btn-outline-secondary" value="salvar"/>

</div>
</form>
<?php
$sql ="select * from computadores";
$result = $connect->query($sql);

	while($dado = $result->fetch_assoc())   {
		echo $dado['nome'] . "-". $dado['ip']."<br>";
	}
?>



<div class="row">
<div class="col">
<div class="bloco online">
<b>127.0.0.1</b><br />
Online
</div>
<div class="bloco offline">
<b>127.0.0.2</b><br />
Offline
</div>
</div>
</div>

</div>
</body>
</html>
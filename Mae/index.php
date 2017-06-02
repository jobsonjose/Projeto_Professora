<!DOCTYPE html>
<html>
<head>
	<title>Medias de Alunos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="titulo">
	<h3>Ola Professora!!</h3>
	<p>Sistema mata burro.</p>
	</div>
	<p>Escolha Quantidade de Nota (min = 0 // max = 4)</p>

	<hr>
	<form action="media.php" method="POST">
		<input type="number" id="number" min="0" max="4" name="quantidade"><button id="click">Quantas Notas</button>
		<br>
		<label>Nome do Aluno :</label>
		<input type="text" id="nome" name="aluno" placeholder="Digite o nome do Aluno" required>
		<br>
		<label>Coloque as Notas :</label>
		<div id="notas"></div>
		<br>
		<input type="submit" name="enviar" value="Media">
	</form>

<table>
<tr>
	<th>Codigo</th>
	<th>Nome do Aluno</th>
	<th>Media do Aluno</th>
</tr>
<tr>
	<?php
	session_start();
	// var_dump($_SESSION);
	 for ($i=0; $i < count($_SESSION['Alunos']) ; $i++){
	 	$aluno = $_SESSION['Alunos'][$i];
	 	$media = $_SESSION['Medias'][$i];
	 	echo "<td>".$i."</td>";
	 	echo "<td>".$aluno."</td>";
	 	echo "<td>".$media."</td>";
	 ?>

</tr>
<?php } ?>
</table>
<script>
	$("#click").on("click", function(){
		$(".remove").remove();
		var number = $("#number").val();
		for(var i = 0; i < number; i++){
			$("#notas").append("<input class='remove' type='number' step='0.1'  name='nota" +(i + 1)+"'>");
		}
	});
</script>
</body>
</html>
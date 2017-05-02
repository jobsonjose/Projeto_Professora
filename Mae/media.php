<?php 
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];
	$nota4 = $_POST['nota4'];
	$cont = $nota1 + $nota2 + $nota3;
	$media = $cont / 2;
	session_start();

	if (!isset($_SESSION['Alunos'])) {
		$_SESSION['Alunos'] = array();

	}
	if (!isset($_SESSION['Medias'])) {
		$_SESSION['Medias'] = array();
	}

	$_SESSION['Alunos'][] = $_POST['aluno'];
	$_SESSION['Medias'][] = $media;
	// var_dump($_SESSION);
	header("location: index.php");
 ?>
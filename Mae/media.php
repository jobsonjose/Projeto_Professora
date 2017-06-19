<?php
	$quantidade = $_POST['quantidade'];
	$count = $_POST['nota1'] + $_POST['nota2'] + $_POST['nota3'] + $_POST['nota4'];
	$media = $count / $quantidade;

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
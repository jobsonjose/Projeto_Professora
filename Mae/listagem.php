<!DOCTYPE html>
<html>
<head>
    <title>Listagem</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
         <li><a href="index.php">Home</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="registro_notas.php">Medias</a></li>
            <li><a href="listagem.php">Lista de Medias</a></li>

    </nav>
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
        echo "<td>".number_format($media, 2, "." , ",")."</td>";
     ?>

</tr>
<?php } ?>
</table>

</body>
</html>
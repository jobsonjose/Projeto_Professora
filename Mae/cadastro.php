<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="registro_notas.php">Medias</a></li>
            <li><a href="listagem.php">Lista de Medias</a></li>

        </ul>
    </nav>
    <h4>Bem-vindo Professor(a)</h4>
    <p>Aqui você faz o seu cadastro para colocar as medias</p>
    <form action="banco/insert.php" method="POST" accept-charset="utf-8">
        <label>Nome : <input type="text" name="nometxp" placeholder="Ex: Carminha + Sobrenome"></label>
        <label>Email : <input type="email" name="emailtxp" placeholder="Ex: SantaRita@santarita.com"></label>
        <input type="submit" name="Cadastrar" value="Cadastrar">
    </form>

</body>
</html>
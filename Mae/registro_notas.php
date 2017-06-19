<!DOCTYPE html>
<html>
<head>
    <title>Medias</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
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
<p>Escolha Quantidade de Nota (min = 0 // max = 4)</p>

    <hr>
    <form action="insert2.php" method="POST">
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

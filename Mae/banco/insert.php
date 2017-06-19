<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../cadastro.php">Cadastro</a></li>
            <li><a href="../registro_notas.php">Medias</a></li>
            <li><a href="../listagem.php">Lista de Medias</a></li>

        </ul>
    </nav>
                    <?php
                        include "conexao.php";

                     $nome = $_POST['nometxp'];
                     $email = $_POST['emailtxp'];

                        $ret = $pdo->exec("INSERT INTO NT_PROFESSORA (PRO_NOME, PRO_EMAIL) VALUES ('$nome', '$email')");
                        //var_dump($result);
                        if ($ret > 0) {
                            echo "Cadastro Finalizado Com Sucesso";
                        }else{
                            echo "Erro Ao tentar cadastrar-se";

                        }

                       ?>

</body>
</html>
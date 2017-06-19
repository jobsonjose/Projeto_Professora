<?php
    $dbname = "NOTAS";
    $host = "localhost";
    $user = "root";
    $pass = "123456";

    $dsn = "mysql:host=$host;dbname=$dbname";

    $pdo = new PDO($dsn, $user,$pass);


 ?>
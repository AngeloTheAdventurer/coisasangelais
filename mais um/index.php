<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "t2";

    $conn = new mysqli($localhost, $username, $password, $database);
    
    if ($conn->connect_error)  {
        echo "Falha na conexão";
    } else {
    
    echo "Conectado com sucesso";

    $conn->close();

    }
?>
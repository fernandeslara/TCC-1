<?php
    $mysqli = new mysqli("localhost", "root", "", "iris");

    if (mysqli_connect_errno()){
        printf("Erro de conexão:  %s\n", mysqli_connect_error());
        exit();
    }
?>

<?php

    session_start();
    $_SESSION["username"] = "";
    $_SESSION["loggedin"] = false;

    include 'conexao.php';

    $usuario = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username='$usuario' AND password='$pass'";
    $conn = Conexao::conectar();
    $result = $conn->query($sql);

    if($result->rowCount() > 0){
        //existe um usuário criado
        $_SESSION["username"] = $usuario;
        $_SESSION["loggedin"] = true;
        header("Location: listCrianca.php");
    }else{
        header("Location: listCrianca.php");
    }







?>
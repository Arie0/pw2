<?php
    require "Usuario.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $usuario = new Usuario ();
        $usuario-> nome = $_POST['nome'];
        $usuario-> email = $_POST['email'];
        $usuario-> idade = $_POST['idade'];

        if (isset ( $_SESSION["user_name"])){
            echo "<br>" . $_SESSION["user_name"] . "<br>";
        }else{
            echo "Variável não existe!<br>";
            $_SESSION["user_name"] = $usuario->nome;
            echo "Váriavel criada! => " . $_SESSION["user_name"];
        }

        echo "Usuario cadastrado com sucesso!<br>";

        $usuario->mostraUsuario();
    }else{
        echo "REQUISIÇÃO NÃO ENCONTRADA!";
    }
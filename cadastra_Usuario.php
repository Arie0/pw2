<?php
    require "Usuario.php";

        $usuario = new Usuario ();
        $usuario-> nome = $_POST['nome'];
        $usuario-> email = $_POST['email'];
        $usuario-> idade = $_POST['idade'];

        $usuario->mostraUsuario();

<?php
require "login.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();

    $_SESSION["user_name"] = $_POST [ "name"];

    echo "<br>Seja Bem vindo --> " .$_SESSION["user_name"];
    
}else{
    echo "REQUISIÇÃO NÃO ENCONTRADA!";

}
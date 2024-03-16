<?php
require_once "../controllers/UsuarioController.php";

session_start();

if (isset ($POST["login"]) && isset ($POST ["senha"])){
    $usuarioController = new UsuarioController();
    $usuarioController->login($_POST["login"], $_POST["senha"]);
}

?>
<?php
if (isset ($_SESSION["mensagem"])){
    ?>
    <div class = "alert alert-warning" role="alert">
        <strong>ERRO:</strong>
        <?php
        echo
}

<html>
<head>
<title> Login de Usuário </title>
</head>
<body>
<form method="POST">
<label>Login:</label><input type="text" name="login" id="login"><br><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br><br>
<a href="cadastro.html">Cadastre-se</a>
</form>
</body>
</html>


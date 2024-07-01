<?php
include "classe/Usuario.php";

var_dump($_POST);

$user = $_POST['usuario'];
$password = $_POST['senha'];
$confirmaSenha = $_POST['confirmar'];

$usuario = new Usuario();

$resultado = $usuario->cadastrarUsuario($user, $password, $confirmaSenha);
echo "<br><br>";
echo $resultado;
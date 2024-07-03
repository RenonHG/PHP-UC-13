<?php
include 'classe/Usuario.php';
include 'classe/Pessoa.php';



//se o campo NÃO estiver preenchido ele cadastra a info no banco de dados  
if (empty($_POST['id_para_alterar'])) {

    $name = $_POST['nome'];
    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];

    $pessoa = new Pessoa();
    $nomePessoa = $pessoa->CadastroPessoa($pessoa);

    $usuario = new Usuario();
    $resultado = $usuario->CadastroUsuario($user, $password, $passwordConfirm);

    echo $resultado;
    echo $nomePessoa;

}

//valida se o campo está preenchido
//se o campo estiver preenchido ele vai fazer um update no banco de dados
if (!empty($_POST['id_para_alterar'])){
    
    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];
    $id_para_alterar = $_POST['id_para_alterar'];

    $usuario = new Usuario();

    $resultado = $usuario->AtualizarUsuario($id_para_alterar, $user, $password, $passwordConfirm);

    echo $resultado;

}

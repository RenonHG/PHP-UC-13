<?php 
include './include/header.php';
include './classe/Usuario.php';

$usuario = new Usuario();
$senha = new Usuario();
// $nome = new Usuario();

if (isset($_GET['id']) && !empty($_GET['id'])){
    $id_alterar = $_GET['id'];

    $dadosUsuario = $usuario->Listar1Usuario($id_alterar);
    $senhaUsuario = $senha->Listar1Usuario($id_alterar);
}

?>

<body class="d-flex align-items-center py-4 bg-body-tertiary cadastro">

    <main class="form-signin w-100 m-auto">
        <form action="auxcadastro.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">
               <?= isset($id_alterar) ? 'Alterar Dados' : 'Cadastrar Dados' ?>
            </h1>

            <div class="form-floating my-2">
                <input type="text" class="form-control" <?= isset($id_alterar) ? 'disabled' : '' ?> id="nome" name="nome" placeholder="Nome">
                <label for="nome">Nome</label>
            </div>

            <div class="form-floating my-2">
                <input type="text" class="form-control" value="<?= isset($id_alterar) ? $dadosUsuario['usuario'] : '' ?>" id="usuario" name="usuario" placeholder="Usuario">
                <label for="usuario">Usuario</label>
            </div>

            <div class="form-floating my-2">
                <input type="text" class="form-control" value="<?= isset($id_alterar) ? $senhaUsuario['senha'] : '' ?>" id="senha" name="senha" placeholder="Senha">
                <label for="senha_c">Senha</label>
            </div>

            <div class="form-floating my-2">
                <input type="text" class="form-control" value="<?= isset($id_alterar) ? $senhaUsuario['senha'] : '' ?>" id="confirma" name="confirma" placeholder="Senha">
                <label for="confirma">Confirmar Senha</label>
            </div>

            <input class="btn btn-primary w-100 py-2 mt-5" type="submit" value="<?= isset($id_alterar) ? 'Alterar' : 'Cadastrar' ?>">

            <p class="mt-5 mb-3 text-body-secondary">&copy; Aqui estamos mais um dia</p>
        </form>
    </main>

</body>

</html>
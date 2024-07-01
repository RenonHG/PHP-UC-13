<?php

// por boas práticas manter o nome da classe idêntico ao nome do arquivo (e sempre com a primeira letra maiúscula para classes).
class Usuario
{
    public function cadastrarUsuario($user, $password, $confirmaSenha)
    {
        try {
            //Validação do código
            if(empty($user) || $user == null){
                return "Usuario não existe";
            }

            if(empty($password) || $password == null){
                return "Senha não informada";
            }

            if($password != $confirmaSenha){
                return "Senhas não são idênticas";
            }

            $conn = new PDO("mysql:host=localhost;dbname=db_login", "root", "");
            $script = 'INSERT INTO tb_usuario (usuario, senha) VALUE (:usuario, :senha)';
            $preparacao = $conn->prepare($script); // Classe $conn puxando a função prepare($script)  

            //Aqui irá comparar a variável que foi passada em user e password
            $var = [
                ':usuario' => $user,
                ':senha' => $password
            ];

            $preparacao->execute($var);
            
            return "Cadastrado com Sucesso, id: " . $conn->lastInsertId();

        } catch (PDOException $erro) {
            echo "Tem parada errada aí irmão!" . $erro->getMessage();
        }
    }
}

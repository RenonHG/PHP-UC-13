<?php 

class Pessoa{
    public function CadastroPessoa($pessoa){

        try {
            if (empty($pessoa) || $pessoa == null) {
                return "<br>Usuário não informado";
            }
        
            $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
            $script = "INSERT INTO tb_pessoa (nome) VALUE (:nome)";
            $preparo = $conn->prepare($script);

            $preparo->execute([
                'nome:' => $pessoa
            ]);
            return "Usuário cadastrado com sucesso id: " . $conn->lastInsertId();

        } catch (PDOException $erro) {
            echo "Seguinte, deu erro no negocio do treco <br>" . $erro->getMessage();
        }
        
    }
}
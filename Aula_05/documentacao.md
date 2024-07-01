#Documentação

Hoje vimos em php como conectar ao banco de dados, inserir dados de usuario e senha de acordo como foi preenchido pelo prórpio usuário nos campos de login e senha.

```php
<?php 

var_dump($_POST);

//Vai tentar executar o código que está dentro do Try
try{
    
    //variaveis atribuidas para os campos 'usuario' e 'senha' de acordo com o nome da coluna
    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    //essa linha é passado os parâmetros de conexão com o banco de dados
    $conn = new PDO("mysql:host=localhost;dbname=db_login", "root", "");

    // Aqui é o script criado pra utilizar a Inserção de dados no banco, utilizando : no usuario e senha para mostrar ao código que esses valores serão substituídos
    $script = 'INSERT INTO tb_usuario (usuario, senha) VALUE (:usuario, :senha)';
    
    $preparacao = $conn->prepare($script); // Classe $conn puxando a função prepare($script)  

    //Aqui irá comparar a variável que foi passada em user e password e dizer que será substituida
    $var = [
    ':usuario' => $user,
    ':senha' => $password
    ];

    //Aqui vai ser realizada a execução do que foi preparado (substituição)
    $preparacao->execute($var);

    //Caso a tentativa do código em Try dê algum erro rertona essa mensagem dentro do Catch
    } catch(PDOException $erro){
    echo "Tem parada errada aí irmão!" . $erro->getMessage();

    }
```
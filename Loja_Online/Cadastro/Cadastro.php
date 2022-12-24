<?php
    include("Conexao_Cadastro.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO cliente (nome, sobrenome, email, celular, senha, cep , endereco) 
        VALUES ('$nome', '$sobrenome', '$email', '$celular' , '$senha' , '$cep' , '$endereco')";
    $enviar = mysqli_query($conexao, $sql);

    if (mysqli_query($conexao, $sql)){
        echo 
            "<h1>Usuário Cadastrado</h1>
            <p>Nome: ".$nome."<br>
            Sobrenome:".$sobrenome."<br>
            E-mail:".$email."<br>
            Celular:".$celular."<br>
            Senha:".$senha." <br>
            Cep:".$cep."<br>
            Endereço:".$endereco."</p>";

    }else{
        echo "erro:".mysqli_connect_erro($conexao);
    }
    
    mysqli_close($conexao);
?>

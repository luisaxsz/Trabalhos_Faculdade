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
    
    if(mysqli_query($conexao, $sql)){
        echo "usuario cadastrado com sucesso";
    }else{
        echo "erro:".mysqli_connect_erro($conexao);
    }
    
    mysqli_close($conexao);
?>
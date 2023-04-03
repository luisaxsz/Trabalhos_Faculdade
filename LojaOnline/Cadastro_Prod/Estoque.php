<?php  
//nome, quantidade, marca, valor
    include("conexao_estoque.php"); 

    $nome = $_POST['nome'];
    $codprod = $_POST['cod_prod'];
    $marca = $_POST['marca'];
    $valor = $_POST['valor'];

    $comando = "INSERT INTO produto (nome, cod_prod, marca, valor) 
        VALUES ('$nome', $codprod , '$marca' , $valor)"; 
    
    $enviar = mysqli_query($conexao, $comando);

    if ($enviar) {
        echo "<h1>Produto Cadastrado</h1>
        <p>Nome: ".$nome."<br>
        Código do produto:".$codprod."<br>
        Marca do produto:".$marca."<br>
        Valor do produto:".$valor."</p>";
    } else {
        echo "ERRO:".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);

?>
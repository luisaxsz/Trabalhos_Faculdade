<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de produtos</title>
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        div{
	        width: 40%;
	        background: #669bbc;
            border-radius: 5px;
            font-size: 25px;
            margin-top:-20px
        }
        p{
            font-height:regular;
        }
    </style>
</head>
<body>
<?php 
    require("Conexao_Estoque.php");

    $comando = "SELECT * FROM produto";

    $enviar = mysqli_query($conexao , $comando);
    $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
    ?>
<h1>Catalógo de produtos</h1>

<?php 
    foreach ($resultado as $produto){
        $nome = $produto['nome'];
        $codigo = $produto['cod_prod'];
        $marca = $produto ['marca'];
        $valor = $produto ['valor'];

    
?>
<div>
    <div>
        <p><strong>Nome: </strong><?=$nome?></p>
    </div>
    <div>
         <p><strong>Código do produto: </strong><?=$codigo?></p>
    </div>
    <div>
         <p><strong>Marca do produto: </strong><?=$marca?></p>
    </div>
    <div>
         <p><strong>Valor: </strong><?=$valor?></p>
     </div>
    </div>
<?php 
    }
 ?>

</body>
</html>
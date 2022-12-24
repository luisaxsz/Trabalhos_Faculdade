<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Graphicloads-Colorful-Long-Shadow-Cart - Copia.ico" type="image/x-icon">
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
    require("Conexao_Cadastro.php");

    $sql = "SELECT * FROM cliente";

    $enviar = mysqli_query($conexao , $sql);
    $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
    ?>
<h1>Catalógo de clientes</h1>

<?php 
    foreach ($resultado as $produto){
        $nome = $produto['nome'];
        $sobrenome = $produto['sobrenome'];
        $email = $produto ['email'];
        $celular = $produto ['celular'];
        $senha = $produto ['senha'];
        $cep = $produto ['cep'];
        $endereco = $produto ['endereco'];

    
?>
<div id="container">
    <div>
        <p><strong>Nome: </strong><?=$nome?></p>
    </div>
    <div>
         <p><strong>Sobrenome: </strong><?=$sobrenome?></p>
    </div>
    <div>
         <p><strong>E-mail: </strong><?=$email?></p>
    </div>
    <div>
         <p><strong>Celular: </strong><?=$celular?></p>
     </div>
     <div>
         <p><strong>Cep: </strong><?=$cep?></p>
     </div>
     <div>
         <p><strong>Endereço: </strong><?=$endereco?></p>
     </div>
    </div>
<?php 
    }
 ?>

</body>
</html>
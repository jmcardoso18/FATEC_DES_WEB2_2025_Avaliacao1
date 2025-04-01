<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Bibliotecário</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></Strong>
        <br>
        </b>Seja bem ao nosso sistema<br></h1>

        <p>Qual operação deseja realizar?</p>

        <a href="cadastroLivro.php" class="btn btn-danger">Cadastrar livros</a>
        <a href="listarPedidos.php" class="btn btn-danger">Listar pedido de livros</a> 
        <a href="listarLivros.php" class="btn btn-danger">Listar todos os livros</a> 
    </div>
    <p>       
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>
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
    <title>Professor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá <strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong>
        <br>
        </b>Seja bem vindo ao nosso sistema</h1>

        <p> Qual operação gostaria de realizar</p>
        <a href="cadastroPedido.php" class="btn btn-danger">Cadastrar pedido de livro</a></b>
        <a href="listarLivros.php" class="btn btn-danger">Listar Livros cadastrados</a></b>
    </div>
    <p>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>
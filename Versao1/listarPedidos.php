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
    <title>Visualizar Livros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1><strong><?php echo htmlspecialchars($_SESSION["username"]); ?></strong>
        <br>
        Essa é a lista de pedido de livros:</h1>
    </div>
        <p>
            <?php 
        if(file_exists("pedido.txt")){
            $file = fopen("pedido.txt", "r");
            while(!feof($file)){
                echo fgets($file). "<br>";
            }
            fclose($file);
        }
        ?>
             <a href="bibliotecario.php" class="btn btn-danger">Voltar</a> 
            <a href="logout.php" class="btn btn-danger">Sair da conta</a>
        </p>
</body>
</html>
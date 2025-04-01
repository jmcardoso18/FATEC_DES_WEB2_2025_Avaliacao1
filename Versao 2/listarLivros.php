<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$livros=file('livros.txt', FILE_IGNORE_NEW_LINES);
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
        Esta é lista de livros:</h1>
    </div>
    <div style="display:flex; justify-content:center; aling-items:center; height:100px;">
    <table style="min-width: 500px; width: 100%;border-collapse: collapse;overflow-x: auto;">
        <tr>
            <th style="text-align: center;">Título</th>
            <th style="text-align: center;">Autor</th>
            <th style="text-align: center;">Editora</th>
            <th style="text-align: center;">ISBN</th>
        </tr>
        <?php foreach ($livros as $livro) {
            list($titulo, $autor, $editora, $isbn) = explode('|', $livro);
        ?>
            <tr>
                <td><?php echo $titulo; ?></td>
                <td><?php echo $autor; ?></td>
                <td><?php echo $editora; ?></td>
                <td><?php echo $isbn; ?></td>
            </tr>
        <?php } ?>
    </table>
  
    </div>
    <div style="margin-top: 300px;">
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </div>

</body>

</html>
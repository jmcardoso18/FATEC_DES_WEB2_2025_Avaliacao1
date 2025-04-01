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
    <title>Cadastro de pedido de livro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body class="p-4 flex " style="justify-content: center; align-items: center;background-color: #8e8e8e;">
    <center>
     <form action="requestPedido.php" method="POST">
        <div style="background-color: whitesmoke; width: 80%;border: black; border-radius: 8px;" class="p-4">
            <h1><Strong><?php echo htmlspecialchars($_SESSION["username"]); ?>
            <br>Cadastrar Pedido de Livros</strong></h1>
            <!-- Itens de cadastro-->
            <div class="form-floating p-2" style="width: 50%;">
                <label for="request">Título do livro</label>
                <input
                    type="text"
                    class="form-control"
                    id="tituloP"
                    name="tituloP"
                    placeholder="Título do livro" />  
            </div>

            <div class="form-floating p-2" style="width: 50%;">
            <label for="request">Autor</label>
                <input
                    type="text"
                    class="form-control"
                    id="autorP"
                    name="autorP"
                    placeholder="Autor" />   
            </div>

           
            <div class="form-floating p-2" style="width: 50%;">
            <label for="request">Editora</label>    
            <input
                    type="text"
                    class="form-control"
                    id="editoraP"
                    name="editoraP"
                    placeholder="Editora" />
               
            </div>
            <div class="form-floating p-2" style="width: 50%;">
                <label for="request">ISBN</label>
                <input
                    type="text"
                    class="form-control"
                    id="isbnP"
                    name="isbnP"
                    placeholder="ISBN" />
                <br>
            </div>
            <div class="p-2">
                <a href="professor.php" class="btn btn-primary" >Voltar</a> 
              
                <button type="submit" class="btn btn-success p-2">Enviar</button>
                <a onclick="abrirNovaAba()" class="btn btn-primary">Ver Lista</a> 
                <script>function abrirNovaAba(){
                    window.open("http://localhost/Avalia%C3%A7%C3%A3oDW1/listarLivros.php",'_blank')
                }</script>
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>        
            </div>
        </div>
    </form>
</center>
</body>
</html>
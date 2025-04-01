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
    <title>Cadastro de livro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body class="p-4 flex " style="justify-content: center; align-items: center;background-color: #8e8e8e;">
    <div class="page-header">
        <!-- Sistema vai usar o username para identificar quem está utilizando o sistema-->
        <h1><b>
        <br></h1>
    </div>
        <!-- Mudar orientação arquivo de registro-->
    <center>
     <form action="requestLivro.php" method="POST">
        <div style="background-color: whitesmoke; width: 80%;border: black; border-radius: 8px;" class="p-4">
            <h1><Strong><?php echo htmlspecialchars($_SESSION["username"]); ?> - Cadastrar Livros</strong></h1>
            <!-- Itens de cadastro-->
            <div class="form-floating p-2" style="width: 50%;">
                <label for="request">Título do livro</label>
                <input
                    type="text"
                    class="form-control"
                    id="titulo"
                    name="titulo"
                    placeholder="Título do livro" />  
            </div>

            <div class="form-floating p-2" style="width: 50%;">
            <label for="request">Autor</label>
                <input
                    type="text"
                    class="form-control"
                    id="autor"
                    name="autor"
                    placeholder="Autor" />   
            </div>

           
            <div class="form-floating p-2" style="width: 50%;">
            <label for="request">Editora</label>    
            <input
                    type="text"
                    class="form-control"
                    id="editora"
                    name="editora"
                    placeholder="Editora" />
               
            </div>
            <div class="form-floating p-2" style="width: 50%;">
                <label for="request">ISBN</label>
                <input
                    type="text"
                    class="form-control"
                    id="isbn"
                    name="isbn"
                    placeholder="ISBN" />
                <br>
            </div>
            <div class="p-2">
                <a href="bibliotecario.php" class="btn btn-danger">Voltar</a> 
                <button type="submit" class="btn btn-success p-2">Enviar</button>
                <a href="logout.php" class="btn btn-danger">Sair da conta</a>        
            </div>
        </div>
    </form>
</center>
</body>
</html>
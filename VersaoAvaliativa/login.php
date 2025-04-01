
<?php
#Codigo php para verificacao de usuario

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    #Verificando se o login é do professor 
    if($_POST['username'] == 'professor' and $_POST['password'] == 'professor'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Professor';
         header("location: professor.php");
    } 
        #verificando se o login é do bibliotecario
    else if($_POST['username'] == 'biblio' and $_POST['password'] == 'biblio'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Bibliotecário';
         header("location: bibliotecario.php");
        }
        else {
        $_SESSION['loggedin'] = FALSE;
        header("location: visitante.php");
        }
}


?>
<!-- Front de login -->
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .wrapper{ width: 500px; padding: 60px;}
    </style>
</head>
<body>
<center>
    <div class="wrapper">
        <h1 style="color:red">Biblioteca Fatec</h1>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input  style="back-groudcolor:blue" type="submit" class="btn btn-primary" value="Acessar">
            </div>  
        </form>
    </div>    
</center>
</body>
</html>
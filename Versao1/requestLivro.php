<?php 
    require './cadastroLivro.php';
    #Recebendo parametros
    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    #Salvando em um txt 
    $file = fopen("livros.txt", "a");
    fwrite($file, $titulo." | ". $autor." | ".$editora." | ".$isbn. "\n");
    fflush($file);
    fclose($file);
    header("location: ./cadastroLivro.php");
?>
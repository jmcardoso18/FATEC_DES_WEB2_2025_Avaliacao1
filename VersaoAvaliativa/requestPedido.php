<?php 
    require './cadastroPedido.php';
    #Recebendo parametros
    $isbnP = $_POST['isbnP'];
    $tituloP = $_POST['tituloP'];
    $autorP = $_POST['autorP'];
    $editoraP = $_POST['editoraP'];
    #Salvando em um txt 
    $file = fopen("pedido.txt", "a");
    fwrite($file, $tituloP." | ". $autorP." | ".$editoraP." | ".$isbnP. "\n");
    fflush($file);
    fclose($file);
    header("location: ./cadastroPedido.php");
?>
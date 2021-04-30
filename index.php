<?php

// VALIDAÇÃO DO $_POST
if(isset($_POST['id'],$_POST['titulo'],$_POST['descricao'],$_POST['imagem'],$_POST['estoque'])){
    die("Cadastrar");
}



include __DIR__.'/includes/header.php';     // Cabeçalho
include __DIR__.'/includes/lista.php';      // Menu para cadastrar e Lista de produtos cadastrados
include __DIR__.'/includes/footer.php';     //

?>
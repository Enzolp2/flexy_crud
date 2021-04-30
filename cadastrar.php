<?php

include __DIR__.'/autoload.php';             // Autoload para as classes
use \App\Entity\cl_produto;

if(isset($_POST['id'],$_POST['titulo'],$_POST['descricao'],$_POST['estoque'])){
    $obProduto = new cl_produto;
    $obProduto->id = $_POST['id'];
    $obProduto->titulo = $_POST['titulo'];
    $obProduto->descricao = $_POST['descricao'];
    $obProduto->imagem = $_POST['imagem'];
    $obProduto->estoque = $_POST['estoque'];
    $obProduto->cadastrar();


}




include __DIR__.'/includes/header.php';        // Cabeçalho
include __DIR__.'/includes/formulario.php';    // Formulario para cadastro
include __DIR__.'/includes/footer.php';         //

?>
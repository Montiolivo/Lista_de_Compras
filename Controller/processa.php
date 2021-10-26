<?php
session_start();
include_once("../Model/conexao.php");

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$mes = filter_input(INPUT_POST , 'mes', FILTER_SANITIZE_STRING);
$nome_produto = filter_input(INPUT_POST, 'nome_produto', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

echo "titulo: $titulo <br>";
echo "nome_produto: $nome_produto <br>";
echo "quantidade: $quantidade <br>";
echo "mes: $mes <br>";


$lista_compra = "INSERT INTO lista_compra (titulo, mes, quantidade, nome_produto) VALUES ('$titulo', '$mes', '$quantidade', '$nome_produto')";
$lista_compra = mysqli_query($con, $lista_compra);

if(mysqli_insert_id($con)){
	$_SESSION['msg'] = "<p style='color:green;'>Lista cadastrada com sucesso</p>";
	header("Location: ../index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar lista</p>";
	header("Location: ../index.php");
}

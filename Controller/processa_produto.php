<?php
session_start();
include_once("conexao.php");

$nome_produto = filter_input(INPUT_POST, 'nome_produto', FILTER_SANITIZE_STRING);
$descr = filter_input(INPUT_POST , 'descr', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

$produto = "INSERT INTO produto (nome_produto, descr, quantidade) VALUES ('$nome_produto', '$descr', '$quantidade')";
$produto = mysqli_query($con, $produto);

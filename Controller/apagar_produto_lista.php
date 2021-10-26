<?php
session_start();
include_once("../Model/conexao.php");

$separaigual  = explode("=", $_SERVER["REQUEST_URI"]);
$separaigual_2  = explode("?", $separaigual['1']);
$nome_produto = $separaigual_2['0'];

$separaigual_3  = explode("?", $separaigual['2']);
$titulo = $separaigual_3['0'];

$separaigual_4  = explode("?", $separaigual['3']);
$mes = $separaigual_4['0'];

$quantidade = $separaigual['4'];

$result_listas = "DELETE FROM lista_compra WHERE nome_produto = '$nome_produto' AND titulo = '$titulo' AND mes= '$mes' AND quantidade = '$quantidade'";
$resultado_listas = mysqli_query($con, $result_listas);

if (mysqli_affected_rows($con)) {
    $_SESSION['msg'] = "<p style='color=green;'>Produto apagado com sucesso</p>";
    header("Location:  ../View/visualizar_lista.php?titulo=".$titulo);
} else {
    $_SESSION['msg'] = "<p style='color=red;'>Erro, produto não foi apagado</p>";
    header("Location: ../View/visualizar_lista.php?titulo=".$titulo);
}

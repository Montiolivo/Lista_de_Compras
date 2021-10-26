<?php
session_start();
include_once("conexao.php");
$nome_produto = filter_input(INPUT_GET, 'nome_produto', FILTER_SANITIZE_STRING);

$result_listas = "DELETE FROM lista_compra WHERE nome_produto = '$nome_produto'";
$resultado_listas = mysqli_query($con, $result_listas);

if (mysqli_affected_rows($con)) {
    $_SESSION['msg'] = "<p style='color=green;'>Produto apagado com sucesso</p>";
    header("Location:  visualizar_produtos.php");
} else {
    $_SESSION['msg'] = "<p style='color=red;'>Erro, produto não foi apagado</p>";
    header("Location: visualizar_produtos.php");
}

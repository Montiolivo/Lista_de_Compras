<?php
session_start();
include_once("conexao.php");
$titulo = filter_input(INPUT_GET, 'titulo', FILTER_SANITIZE_STRING);

$result_listas = "DELETE FROM lista_compra WHERE titulo = '$titulo'";
$resultado_listas = mysqli_query($con, $result_listas);

if (mysqli_affected_rows($con)) {
    $_SESSION['msg'] = "<p style='color=green;'>Lista apagada com sucesso</p>";
    header("Location:  listar_listas_view.php");
} else {
    $_SESSION['msg'] = "<p style='color=red;'>Erro, lista não foi apagada</p>";
    header("Location: listar_listas_view.php");
}

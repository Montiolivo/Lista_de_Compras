<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "banco_lista_compras";

$con = mysqli_connect($host, $usuario, $senha, $bd);

if($con->connect_errno){
    echo "Falha na conexão: (".$con->connect_errno.") ".$con->connect_error;
}
?>
<?php
include_once ("../Model/conexao.php");

$separaigual  = explode("=", $_SERVER["REQUEST_URI"]);
$titulo = $separaigual['1'];

$result_listas = "SELECT * FROM lista_compra WHERE titulo = '$titulo'";
$resultado_listas = mysqli_query($con, $result_listas);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container theme-showcase" role="main">
        <div class="page-header">
            <h1>Visualizar lista completa</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Mês</th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($rows_listas = mysqli_fetch_assoc($resultado_listas)) { ?>
                            <tr>
                                <td><?php echo $rows_listas['titulo']; ?></td>
                                <td><?php echo $rows_listas['mes']; ?></td>
                                <td><?php echo $rows_listas['nome_produto']; ?></td>
                                <td><?php echo $rows_listas['quantidade']; ?></td>
                                <td>
                                   <!--  <button type="button" class="btn btn-xs btn-primary"action="visualizar_lista.php">Visualizar</button> -->
                                    <!-- <button type="button" class="btn btn-xs btn-warning">Editar Produto</button> -->
                                    <button type="button" data-titulo="<?php echo $rows_listas['titulo'];?>" data-mes="<?php echo $rows_listas['mes'];?>" data-quantidade="<?php echo $rows_listas['quantidade'];?>" data-nome_produto="<?php echo $rows_listas['nome_produto'];?>" class="btn btn-xs btn-danger" id="apagar">Apagar Produto</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <button onclick="window.location.href = 'visualizar_listas_view.php'" class="btn btn-primary">Voltar</button>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#apagar', function() {
                var nome_produto = $(this).data('nome_produto');
                var titulo = $(this).data('titulo');
                var mes = $(this).data('mes');
                var quantidade = $(this).data('quantidade');
                window.location.href = "../Controller/apagar_produto_lista.php?nome_produto=" + nome_produto + "?titulo=" + titulo + "?mes="+ mes + "?quantidade=" + quantidade;
            });
        });
    </script>
</body>

</html>
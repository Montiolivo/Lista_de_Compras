<?php
include_once("../Model/conexao.php");

$result_listas = "SELECT SUM(CASE WHEN nome_produto LIKE nome_produto THEN quantidade ELSE quantidade + quantidade END) AS quantidade, nome_produto FROM lista_compra GROUP BY nome_produto;";
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
            <h1>Visualizar produtos</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($rows_listas = mysqli_fetch_assoc($resultado_listas)) { ?>
                            <tr>
                                <td><?php echo $rows_listas['nome_produto']; ?></td>
                                <td><?php echo $rows_listas['quantidade']; ?></td>
                    
                                <td>
                                    <button type="button" data-nome_produto="<?php echo $rows_listas['nome_produto']; ?>" class="btn btn-xs btn-danger" id="apagar">Apagar</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <button onclick="window.location.href = 'visualizar_listas_view.php'" class="btn btn-primary">Voltar para listas</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#apagar', function() {
                var nome_produto = $(this).data('nome_produto');
                window.location.href = "apagar_produto.php?nome_produto=" + nome_produto;
            });
        });
    </script>
</body>


</html>
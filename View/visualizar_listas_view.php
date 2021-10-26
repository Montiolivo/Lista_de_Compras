<?php
include_once ("../Model/conexao.php");
$result_listas = "SELECT * FROM lista_compra GROUP BY titulo";
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
            <h1>Listas de compra</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Mês</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($rows_listas = mysqli_fetch_assoc($resultado_listas)) { ?>
                            <tr>
                                <td id="titulo" value="<? $rows_listas['titulo']; ?>"><?php echo $rows_listas['titulo']; ?></td>
                                <td><?php echo $rows_listas['mes']; ?></td>
                                <td>
                                    <button type="button" data-titulo="<?php echo $rows_listas['titulo']; ?>" class="btn btn-xs btn-primary" id="visualizar">Visualizar</button>
                                    <!-- <button type="button" class="btn btn-xs btn-warning">Editar</button> -->
                                    <button type="button" data-titulo="<?php echo $rows_listas['titulo']; ?>" class="btn btn-xs btn-danger" id="apagar">Apagar</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <button onclick="window.location.href = '../index.php'" class="btn btn-primary">Cadastrar nova lista</button>
            <button onclick="window.location.href = 'visualizar_produtos.php'" class="btn btn-primary">Visualizar Produtos</button>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#visualizar', function() {
                var titulo = $(this).data('titulo');
                window.location.href = "visualizar_lista.php?titulo=" + titulo;
            });
            $(document).on('click', '#apagar', function() {
                var titulo = $(this).data('titulo');
                window.location.href = "apagar_lista.php?titulo=" + titulo;
            });
        });
    </script>
</body>

</html>
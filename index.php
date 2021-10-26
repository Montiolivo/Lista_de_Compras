<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Lista de Compras</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <form method="POST" class="form" action="Controller/processa.php">
        <h2>Cadastro de Lista</h2>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="titulo">Título da lista</label>
                <input class="form-control" name="titulo" type="text" placeholder="Titulo da lista">
            </div>
            <div class="form-group col-md-6">
                <label for="nome_produto">Nome do produto</label>
                <input class="form-control" type="text" name="nome_produto" id="nome_produto" placeholder="Produto">
            </div>
        </div>
        <div class="form-group col-md-2">
            <label for="quantidade">Quantidade</label>
            <input class="form-control" name="quantidade" id="quantidade" placeholder="Quantidade">
        </div>

        <div class="form-group col-md-4">
            <label for="mes">Mês</label>
            <select id="mes" name="mes" class="form-control">
                <option value="Janeiro">Janeiro</option>
                <option value="Fevereiro">Fevereiro</option>
                <option value="Março">Março</option>
                <option value="Abril">Abril</option>
                <option value="Maio">Maio</option>
                <option value="Junho">Junho</option>
                <option value="Julho">Julho</option>
                <option value="Agosto">Agosto</option>
                <option value="Setembro">Setembro</option>
                <option value="Outubro">Outubro</option>
                <option value="Novembro">Novembro</option>
                <option value="Dezembro">Dezembro</option>
            </select>
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
    <div class="form-group col-md-12">
        <button onclick="window.location.href = 'View/visualizar_listas_view.php'" class="btn btn-primary">Visualizar</button>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Cadastro de Lista de Compras</title>

    <link rel="stylesheet" href="style.css" media="all" />
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
</head>

<body>
    <h2>Cadastro de Produto</h2>
    <form method="POST" class="form" action="processa_produto.php">
        <label for="nome_produto">Nome do produto</label>
        <input name="nome_produto" type="text" placeholder="Nome do produto" />

        <label for="descr">Descrição do Produto</label>
        <input name="descr" id="descr" placeholder="Descrição do Produto" />

        <label for="quantidade">Quantidade</label>
        <input name="quantidade" id="quantidade" placeholder="Quantidade" />

        <p class="submit">
            <input type="submit" value="Enviar" />
        </p>
     
    </form>
</body>

</html>
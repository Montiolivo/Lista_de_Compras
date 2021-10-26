# Lista_de_Compras

Esse projeto é a criação de uma lista de compras básica. 

Para desenvolver o sistema, como se trata de uma criação de lista, bem simples, eu usei PHP puro, sem nenhum framework.

# Tecnologias:

    - [PHP]( https://www.php.net/).
    - [Bootstrap](https://getbootstrap.com/).
    - Jquery
    - Mysql
    - JavaScript

- Para executar o projeto, eu usei o XAMPP. Basta clonar a pasta do projeto para dentro do htdocs.

# Funcionamento do sistema: 
    - Na tela de cadastro, você pode cadastrar a lista de compra, para cadastrar mais de um produto por lista, você tem que realizar um novo cadastro, com o mesmo nome e mês.
    - Na tela de Lista de compra, o sistema irá mostrar o nome e o mês de todas as listas cadastradas no banco. Se clicar em visualizar, o sistema irá exibir todos os produtos que estão cadastrados nessa lista.
    - No botão de visualizar produtos, o sistema irá exibir todos os produtos e as quantidades totais, cadastradas no banco. 
# Banco de Dados
 O banco de dados banco_lista_compras, é composto apenas, por uma tabela, lista_compra. Essa tabela, possui os campos, id, titulo, mes, quantidade e nome_produto.

 - Importante: Os nomes dos produtos não devem tem acentos e os títulos, devem ser juntos. EX: titulo = ListaFevereiro. Caso contrario, pode dar algum erro na hora de executar o sistema. 

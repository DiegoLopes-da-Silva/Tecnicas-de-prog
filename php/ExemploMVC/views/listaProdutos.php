<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <table border="1"> 
        <a href="">Novo Produto</a>
         
        <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>

        </tr>

        <?php
        foreach($resultado as $dados) {
            $preco = number_format($dados->preco_produto,2,",",".");
            echo "<tr>
            <td>{$dados->nome_produto}</td>
            <td>$preco</td>
            <td>{$dados->estoque_produto}</td>
            <td><a href=''>Alterar</a>&nbsp;&nbsp;</td>
            <td><a href=''>Deletar</a>&nbsp;&nbsp;</td>
                </tr>";
        }
    ?>

    </table>
   

</body>
</html>
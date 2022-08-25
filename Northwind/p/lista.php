<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Listagem de produtos</h1>
<table border="1" class="fds"><style> .fds { color: white; background-color: black; border-color: red; text-align: center;margin: 0 auto;} body {background-color: black; } h1 { text-align: center; color: white;}</style>
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Valor</td>
        <td>Grupo</td>
        <td>Fornecedor</td>
        <td>Atualizar</td>
        <td>Deletar</td>
    </tr>
<?php
    $sql = "SELECT p.codigo, p.nome, p.valor, f.fornece, pg.descricao from produtos p inner join produtos_grupos pg on (p.grupo_id = pg.id)  inner join fornecedores f on (p.fornecedor = f.id)" ;
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
    foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['codigo']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['valor']; ?></td>
                    <td><?php echo $linha['descricao']; ?></td>
                    <td><?php echo $linha['fornece']; ?></td>
                    <td><?php echo "<a href=\"?pagina=p_atualiza&codigo={$linha['codigo']}\">Atualizar</a>"; ?></td>
                    <td><?php echo " <a href=\"?pagina=p_deleta&codigo={$linha['codigo']}\">Deletar</a>"; ?></td>
                </tr>
<?php
    }
    ?>

</table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Listagem de Fornecedores</h1>
<table border="1" class="fds"><style> .fds { color: white; background-color: black; border-color: red; text-align: center;margin: 0 auto;} body {background-color: black; } h1 { text-align: center; color: white;}</style>
    <tr>
        <td>Código</td>
        <td>Funcionários</td>
        <td>Cidade</td>
        <td>Estado</td>
        <td>País</td>
        <td>Atualizar</td>
        <td>Deletar</td>
    </tr>
<?php
    $sql = "SELECT fu.codigo, fu.nome, fu.cidade, fu.estado, fu.pais from funcionarios fu" ;
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
    foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['codigo']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['cidade']; ?></td>
                    <td><?php echo $linha['estado']; ?></td>
                    <td><?php echo $linha['pais']; ?></td>
                    <td><?php echo "<a href=\"?pagina=p_atu&codigo={$linha['codigo']}\">Atualizar</a>"; ?></td>
                    <td><?php echo "<a href=\"?pagina=p_dfun&codigo={$linha['codigo']}\">Deletar</a>"; ?></td>
                </tr>
<?php
    }
    ?>

</table>
</body>
</html>
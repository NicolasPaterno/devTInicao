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
        <td>Fornecedor</td>
        <td>Deletar</td>
    </tr>
<?php
    $sql = "SELECT f.id, f.fornece from fornecedores f" ;
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute();
    foreach($consulta as $linha) {
            ?>
                <tr>
                    <td><?php echo $linha['id']; ?></td>
                    <td><?php echo $linha['fornece']; ?></td>
                    <td><?php echo " <a href=\"?pagina=p_d&codigo={$linha['id']}\">Deletar</a>"; ?></td>
                </tr>
<?php
    }
    ?>

</table>
</body>
</html>
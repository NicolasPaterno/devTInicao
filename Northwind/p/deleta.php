<?php
    if(isset($_POST['deletar'])){
        $sql = "DELETE FROM produtos WHERE codigo = :codigo";
        $parse = $conn->prepare($sql);
        $parse->execute(array("codigo"=>$_GET['codigo']));
        header("Location: ?pagina=produtos_lista");
    }
?>

<h1>Deletar Produtos</h1><style> table{color: white; background-color: black; border-color: red; text-align: center;margin: 0 auto;} body { background-color: white;}  h1 { text-align: center; color: black;} h4 {color: black;} form{text-align: center;} </style>
<?php
    $sql = "SELECT * FROM produtos p inner join produtos_grupos pg on (p.grupo_id = pg.id) inner join fornecedores f on (p.fornecedor = f.id) where codigo = :codigo";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("codigo" => $_GET['codigo']));

    $linha = $consulta->fetch();
?>
<table border="1">
<tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Valor</td>
    <td>Grupo</td>
    <td>Fornecedor</td>
</tr>
<tr>
    <td><?php echo $linha['codigo']; ?></td>
    <td><?php echo $linha['nome']; ?></td>
    <td><?php echo $linha['valor']; ?></td>
    <td><?php echo $linha['descricao']; ?></td>
    <td><?php echo $linha['fornece']; ?></td>
</tr>
</table>
<br>
<br>
<form method="post">
    <input type="submit" name="deletar" value="Deletar">
    <br>
    
    <br>
    <a href="index.php">Voltar</a>
</form>

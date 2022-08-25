<?php
    if(isset($_POST['deletar'])){
        $sql = "DELETE FROM fornecedores WHERE id = :id";
        $parse = $conn->prepare($sql);
        $parse->execute(array("id"=>$_GET['codigo']));
        header("Location: ?pagina=p_lfornecedor");
    }
?>

<h1>Deletar Produtos</h1><style> table{color: white; background-color: black; border-color: red; text-align: center;margin: 0 auto;} body { background-color: white;}  h1 { text-align: center; color: black;} h4 {color: black;} form{text-align: center;} </style>
<?php
    $sql = "SELECT * FROM fornecedores f where id = :id";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("id" => $_GET['codigo']));

    $linha = $consulta->fetch();
?>
<table border="1">
<tr>
    <td>Código</td>
    <td>Fornecedor</td>
</tr>
<tr>
    <td><?php echo $linha['id']; ?></td>
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

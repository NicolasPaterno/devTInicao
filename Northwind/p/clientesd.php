<?php
    if(isset($_POST['deletar'])){
        $sql = "DELETE FROM clientes WHERE codigo = :codigo";
        $parse = $conn->prepare($sql);
        $parse->execute(array("codigo"=>$_GET['codigo']));
        header("Location: ?pagina=p_lc");
    }
?>

<h1>Deletar Clientes</h1><style> table{color: white; background-color: black; border-color: red; text-align: center;margin: 0 auto;} body { background-color: white;}  h1 { text-align: center; color: black;} h4 {color: black;} form{text-align: center;} </style>
<?php
    $sql = "SELECT * FROM clientes c where codigo = :codigo";
    $consulta = $conn->prepare($sql);
    $consulta->execute(array("codigo" => $_GET['codigo']));

    $linha = $consulta->fetch();
?>
<table border="1">
<tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Telefone</td>
</tr>
<tr>
    <td><?php echo $linha['codigo']; ?></td>
    <td><?php echo $linha['nomec']; ?></td>
    <td><?php echo $linha['fone']; ?></td>
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
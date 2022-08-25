<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<h1>Cadastro de produtos</h1>
<style> body { background-color: black;}  h1 { text-align: center; color: white;} h4 {color: white;} form {text-align: center;} </style>
<?php
if(isset($_POST['gravar'])){
    $sql = "INSERT INTO produtos(nome,valor,grupo_id,fornecedor)
        values (:nome,:valor,:grupo_id, :fornece)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("nome" => $_POST['nome_produto'],
    "valor" => $_POST['valor_produto'],
    "grupo_id" => $_POST["grupo_produto"], "fornece"=> $_POST['fornecedor']));
}
?>
<form method="post">
    <h4>Nome:</h4> 
    <input type="text" name="nome_produto" >
    <br>
    <h4>Valor:</h4>
    <input type="text" name="valor_produto" >
    <br>
    <h4>Grupo:</h4>
    <select name="grupo_produto">
        <?php
            $sql = "SELECT * from produtos_grupos";
            $consulta = $conn->prepare($sql);
            $consulta->execute();
            while($linha = $consulta->fetch())
            {
                echo "<option value=\"{$linha['id']}\">{$linha['descricao']}</option>";
            }
        ?>
    </select>
    <h4>Fornecedor</h4>
    <select name="fornecedor">
        <?php
            $sql = "SELECT * from fornecedores";
            $consulta = $conn->prepare($sql);
            $consulta->execute();
            while($linha = $consulta->fetch())
            {
                echo "<option value=\"{$linha['id']}\">{$linha['fornece']}</option>";
            }
        ?>
    </select>
    <br>
    <br>
    <br>
    <input type="submit" name="gravar" >

</form>
</body>
</html>
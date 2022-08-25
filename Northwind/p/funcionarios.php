<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<h1>Cadastro de Funcionários</h1>
<style> body { background-color: black;}  h1 { text-align: center; color: white;} h4 {color: white;} form {text-align: center;} </style>
<?php
if(isset($_POST['gravar'])){
    $sql = "INSERT INTO funcionarios(nome, cidade, estado, pais)
        values (:nome, :cidade, :estado, :pais)";
    $consulta = $conn->prepare($sql);
    $resultado = $consulta->execute(array("nome"=> $_POST['nome'], "cidade"=> $_POST['cidade'], "estado"=> $_POST['estado'], "pais"=> $_POST['pais']));
}
?>
<form method="post">
    <h4>Nome:</h4> 
    <input type="text" name="nome">
    <br>
    <h4>cidade:</h4>
    <input type="text" name="cidade">
    <br>
    <h4>Estado:</h4> 
    <input type="text" name="estado">
    <br>
    <h4>País:</h4> 
    <input type="text" name="pais">
    <br>
    <br>
    <br>
    <input type="submit" name="gravar" >

</form>
</body>
</html>
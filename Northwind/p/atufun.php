<?php
    if(isset($_POST['atualizar']))
    {
        $sql = "UPDATE funcionarios SET nome = :nome, cidade = :cidade, estado = :estado, pais = :pais WHERE codigo = :codigo";
        $atualizar = $conn->prepare($sql);
        if($atualizar->execute(array(
            "nome" => $_POST['nome'], 
            "cidade" => $_POST['cidade'], 
            "estado" => $_POST['estado'],
            "pais"=> $_POST['pais'], 
            "codigo" => $_GET['codigo'])))
        {
            echo "Dados foram atualizados com sucesso! ";
        }
    }
?>    

<h1>Atualizar o Produto</h1>
<?php
    $sql = "SELECT * FROM funcionarios where codigo = :codigo";
    $produto = $conn->prepare($sql);
    $produto->execute(array("codigo"=> $_GET['codigo']));
    $linha = $produto->fetch();

?>
<form method="post"><style>h4 {color: white;} h1{text-align: center; color: white;} body {background-color: black;} form{text-align: center;} </style>
    <h4>Nome</h4> 
    <input type="text" name="nome" value="<?php echo $linha['nome']; ?>">
    <br>
    <h4>Cidade</h4>
    <input type="text" name="cidade" value="<?php echo $linha['cidade']; ?>">
    <br>
    <h4>Estado</h4>
    <input type="text" name="estado" value="<?php echo $linha['estado']; ?>">
    <br>
    <h4>Pais</h4>
    <input type="text" name="pais" value="<?php echo $linha['pais']; ?>">
    <br>
    <br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
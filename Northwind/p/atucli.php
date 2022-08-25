<?php
    if(isset($_POST['atualizar']))
    {
        $sql = "UPDATE clientes SET nomec = :nomec, fone = :fone WHERE codigo = :codigo";
        $atualizar = $conn->prepare($sql);
        if($atualizar->execute(array(
            "nomec" => $_POST['nome'], 
            "fone" => $_POST['fone'],  
            "codigo" => $_GET['codigo'])))
        {
            echo "Dados foram atualizados com sucesso! ";
        }
    }
?>    

<h1>Atualizar o Produto</h1>
<?php
    $sql = "SELECT * FROM clientes where codigo = :codigo";
    $produto = $conn->prepare($sql);
    $produto->execute(array("codigo"=> $_GET['codigo']));
    $linha = $produto->fetch();

?>
<form method="post"><style>h4 {color: white;} h1{text-align: center; color: white;} body {background-color: black;} form{text-align: center;} </style>
    <h4>Nome</h4> 
    <input type="text" name="nome" value="<?php echo $linha['nomec']; ?>">
    <br>
    <h4>Fone</h4>
    <input type="text" name="fone" value="<?php echo $linha['fone']; ?>">
    <br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
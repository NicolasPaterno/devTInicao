<?php
    if(isset($_POST['atualizar']))
    {
        $sql = "UPDATE produtos SET nome = :nome, valor = :valor, grupo_id = :grupo, fornecedor = :fornece WHERE codigo = :codigo";
        $atualizar = $conn->prepare($sql);
        if($atualizar->execute(array(
            "nome" => $_POST['nome'], 
            "valor" => $_POST['valor'], 
            "grupo" => $_POST['grupo'],
            "fornece"=> $_POST['fornecedor'], 
            "codigo" => $_GET['codigo'])))
        {
            echo "Dados foram atualizados com sucesso! ";
        }
    }
?>    

<h1>Atualizar o Produto</h1>
<?php
    $sql = "SELECT * FROM produtos where codigo = :codigo";
    $produto = $conn->prepare($sql);
    $produto->execute(array("codigo"=> $_GET['codigo']));
    $linha = $produto->fetch();

?>
<form method="post"><style>h4 {color: white;} h1{text-align: center; color: white;} body {background-color: black;} form{text-align: center;} </style>
    <h4>Nome</h4> 
    <input type="text" name="nome" value="<?php echo $linha['nome']; ?>">
    <br>
    <h4>Valor</h4>
    <input type="text" name="valor" value="<?php echo $linha['valor']; ?>">
    <br>
    <h4>Grupo</h4>
    <select name="grupo">
        <?php
            $sql = "SELECT * from produtos_grupos";
            $consulta = $conn->prepare($sql);
            $consulta->execute();
            while ($grupo = $consulta->fetch()) {
                if ($grupo['codigo'] == $linha['grupo_id'])
                {
                    echo "<option value=\"{$grupo['id']}\" selected>{$grupo['descricao']}</option>";
                }
                else{
                    echo "<option value=\"{$grupo['id']}\">{$grupo['descricao']}</option>";
            } 
        }  

        ?>
    </select>
    <br>
    <br>
    <h4>Fornecedor</h4>
    <select name="fornecedor">
        <?php
            $sql = "SELECT * from fornecedores";
            $consulta = $conn->prepare($sql);
            $consulta->execute();
            while ($grupo = $consulta->fetch()) {
                if ($grupo['codigo'] == $linha['fornecedores'])
                {
                    echo "<option value=\"{$grupo['id']}\" selected>{$grupo['fornece']}</option>";
                }else{
                    echo "<option value=\"{$grupo['id']}\">{$grupo['fornece']}</option>";
                }
            }
            ?>
    </select>
    <br>
    <br>
    <br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
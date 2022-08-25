<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ínicio</title>
</head>
<body><style> body{background-color: black;} </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php

    include_once('lib/conexao.php');
    include_once('lib/sql.php');
    include 'menu.php';
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_lista')
    {
        include 'p/lista.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_cadastro')
    {
        include 'p/cadastro.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_deleta')
    {
        include 'p/deleta.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_atualiza')
    {
        include 'p/atualiza.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_fcadastro')
    {
        include 'p/fcadastro.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_lfornecedor')
    {
        include 'p/fornecedores.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_d')
    {
        include 'p/df.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_c')
    {
        include 'p/clientes.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_lc')
    {
        include 'p/dclientes.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_dc')
    {
        include 'p/clientesd.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_fun')
    {
        include 'p/funcionarios.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_lfun')
    {
        include 'p/listafun.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_dfun')
    {
        include 'p/deletafun.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_atu')
    {
        include 'p/atufun.php';
    }
    if (isset($_GET['pagina']) & $_GET['pagina'] == 'p_atuc')
    {
        include 'p/atucli.php';
    }





?>
</body>
</html>
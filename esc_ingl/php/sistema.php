<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM cadastro_aluno WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM cadastro_aluno ORDER BY id DESC";
    }
    $result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/sistema.css" media="screen">
    <link rel="icon" type="image/x-icon" href="../imagens/favicon (1).ico">
    <title>STEP UP!</title>
</head>
<body>
    <section class="container">
        <header id="header">
            <a id="logo" href="#"><img src="../imagens/logo.png" width="100%"></a>
            <nav id="nav">
              <ul id="menu" role="menu">
                <li><a href="alunos.php">Alunos</a></li>
                <li><a href="#">Lançar Nota</a></li>
                <li><a href="#">Lançar Atividade</a></li>
                <li><a href="sair.php">Sair</a></li>
              </ul>
            </nav>
        </header>

        <section class="container-1">
            <div class="conteudo" id="conteudo">
                <div class="titulo" id="tittle">
                    <h1>
                        Bem Vindo!
                    </h1>
                </div>
                <div class="botões" id="botões">
                    <input type="submit" href="#" name="submit" id="submit" value="Alunos">
                    <input type="submit" name="submit" id="submit" value="Lançar Nota">
                    <input type="submit" name="submit" id="submit" value="Lançar Atividade">
                </div>
            </div>
        </section>
    </section>
</body>
</html>
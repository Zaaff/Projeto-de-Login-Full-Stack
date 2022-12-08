<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['e-mail']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['e-mail'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cadastro_aluno WHERE email = '$email' and senha = '$senha'";

        $result = $con->query($sql);


        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../php/login_incorreto.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../php/sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: ../php/login.php');
    }
?>
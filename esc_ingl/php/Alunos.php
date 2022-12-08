<?php
include('config.php');

$sql = "SELECT * FROM cadastro_aluno ORDER BY id DESC";

$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/alunos.css" media="screen">
    <link rel="icon" type="image/x-icon" href="../imagens/favicon (1).ico">
    <title>STEP UP!</title>
</head>
<body>
    <section class="container">
        <header id="header">
            <a id="logo" href="#"><img src="../imagens/logo.png" width="100%"></a>
            <nav id="nav">
              <ul id="menu" role="menu">
                <li><a href="#">Alunos</a></li>
                <li><a href="#">Lançar Nota</a></li>
                <li><a href="#">Lançar Atividade</a></li>
                <li><a href="../php/sair.php">Sair</a></li>
              </ul>
            </nav>
        </header>

        <section class="container-1">
            <div class="conteudo" id="conteudo">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cpf</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['Nome']."</td>";
                            echo "<td>".$user_data['Cpf']."</td>";
                            echo "<td>".$user_data['Email']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            </div>
        </section>
    </section>
</body>
</html>

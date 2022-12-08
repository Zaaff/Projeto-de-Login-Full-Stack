
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css" media="screen">
    <title>Login</title>
</head>
<body>
    <section class="container" id="container">
        <section class="conteudo">
            <div class="esquerdo" id="esquerdo">
                <div class="imagem">
                    <a href="#"><img src="../imagens/logo.png"></a>
                </div>
            </div>
            <div class="direito" id="direito">
                <div class="textos">
                    <label>Bem vindo</label>
                    <h1>Faça seu Login</h1>
                </div>
                <div class="dados">
                    <div class="box">
                        <form action="../php/encaminhar.php" method="POST">
                                <div class="inputBox">
                                    <label for="e-mail" class="labelInput">E-mail</label><br>
                                    <input type="text" name="e-mail" id="e-mail" class="inputUser" >
                                </div><br>
                                <div class="inputBox">
                                    <label for="senha" class="labelInput">Senha</label><br>
                                    <input type="password" name="senha" id="senha" class="inputUser" >
                                </div><br><br>
                                <br><br>
                                <div class="botao">
                                    <input class="Submit" type="submit" name="submit" value="Enviar">
                                </div>
                                <div class="cadastro" id="cadastrar">
                                    <a href="../php/form.php" class="cad">Cadastre-se</a>
                                </div>     
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="senha.js"></script>
    </section>
</body>
</html>
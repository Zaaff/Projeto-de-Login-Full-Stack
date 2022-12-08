
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
                    <h1>Login Inválido, Verifique sua conta!</h1>
                    <label>ou <a href='../php/form.php'>realize seu cadastro!</a></label>
                </div>
                <div class="dados">
                    <div class="box">
                        <form action="../php/login.php" method="POST">
                                <div class="botao">
                                    <input type="submit" name="submit" id="submit" value="Voltar" >
                                </div>     
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>
</html>
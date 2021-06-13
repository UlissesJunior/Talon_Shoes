<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste Estágio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="nav-left">
                    <img src="assets/img/Logo_L.svg" id="logo" alt="">
                </div>
                <div class="nav-center">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="">Sobre</a></li> 
                        <li><a href="">Home</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Home</a></li>
                        <input type="text" name="" id="" placeholder="Pesquisa">
                        <img href="#" id ="SunOrMoon" src="assets/img/Sun.svg" alt="" onclick="mudaTheme()">
                        <img href="#" id ="Store" src="assets/img/Store_L.svg" alt="">
                    </ul>
                </div>
            </nav>
        </header>
        <div class="main">
            <div class="slide-nike">
                <div class="textNike">
                    <h1 id="TituloText">Nike Air Max 90</h1>
                    <h3 id= "Corpo">O Air Max 90 é um dos principais sneakers da família Max Air. Hoje, o Nike 90 é encontrado em
                        várias
                        versões e cores para atender aos mais diferentes gostos.</h3>
                    <h2 id="Preco">R$520,00</h2>
                    <button><h4 href="">Compre Agora</h4></button>
                    <div class="circle_big">
                        <img src="assets/img/Nike_Big.png" id="TenisBig" alt="">
                        <div class="emoji">
                            <img src="assets/img/Emoji.svg" alt="">
                        </div>
                    </div>
                    <div class="slider-button">
                        <div class="button1" onclick="mudaNike()">
                            <img src="assets/img/Button_Nike.svg" alt="" >
                        </div>
                    </div>    
                    <div class="slider-button">
                        <div class="button2" onclick="mudaAdidas()">
                            <img src="assets/img/Button_Adidas.svg" alt="">
                        </div>
                    </div>  
                    <div class="slider-button">
                        <div class="button3" onclick="mudaPuma()">
                            <img src="assets/img/Button_Puma.svg" alt="">
                        </div>
                    </div> 
                </div>
            </div>
            <div class="tenisMenoresNike">
                <div class="circle_small">
                    <div class="tenis1">
                        <a href=""><img id="Tenis1" src="assets/img/Nike_1.png" alt=""></a>
                    </div>
                </div>
                <div class="circle_small">
                    <div class="tenis2">
                        <a href=""><img id="Tenis2"  src="assets/img/Nike_2.png" alt=""></a>
                    </div>
                </div>
                <div class="circle_small">
                    <div class="tenis3">
                        <a href=""><img id="Tenis3"  src="assets/img/Nike_3.png" alt=""></a>
                    </div>
                </div>
                <div class="circle_small">
                    <div class="tenis4">
                        <a href=""><img id="Tenis4" src="assets/img/Nike_4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
        <div class="container">
            <form action="fale_conosco.php" method="post" class="email">
                <h1>Fale Conosco</h1>
                <input type="text" name="nome" id="" placeholder="Nome">
                <input type="email" name="email" id="" placeholder="Email">
                <div>
                    <input type="text" name="nome" id="" placeholder="Mensagem">
                </div>
                <button type="submit"><h4 href="">Compre Agora</h4></button>
                <!--<input type="submit" value="Enviar">-->
                
            </form>
            <?php
                $vetPosis = ['nome', 'email', 'menssagem']
                $passa = true;
                for ($i=0; ($i < 2) && ($passa); $i++) { 
                    if (strlen($_POST[$vetPosis[$i]]))
                        $passa = false;
                }
                if ($passa) {
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $menssagem = $_POST['menssagem'];
                    // escrevendo email
                    $to = "lpc.faria@unesp.br";
                    $subject = "Mensagem usuário - Talon Shoes";
                    $body = "Nome: $nome \r\n".
                            "Email: $email \r\n".
                            "Messagem: $body";
                    $header = "From:lpc.faria@unesp.br \r\n".
                                . "Reply-To: $email \r\n"
                                . "X=Mailer:PHP/".phpversion();
                    if (mail($to,$subject, $body, $header)) {
                        echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
                        echo "javascript:window.location='index.php';</script>";
                    } else {
                        echo "<script type='javascript'>alert('Ops, ocorreu algum erro, verifique as informações');";
                        echo "javascript:window.location='index.php';</script>";
                    }
                }
            ?>
        </div>
        <footer>
            <div class="rodape">

            </div>
        </footer>
         <!--FECHA MAIN-->

            
      
    <script src="script.js"></script>
</body>

</html>
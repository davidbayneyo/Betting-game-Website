<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>
        <link rel="icon" href="<?php echo e(asset('front-assets/img/ico_game.png')); ?>">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo e(asset('front-assets/assets/css/main.css')); ?>" />
        <noscript><link rel="stylesheet" href="<?php echo e(asset('front-assets/assets/css/noscript.css')); ?>" /></noscript>
    </head>

    <body class="landing is-preload">
        <!-- Page Wrapper -->
            <div id="page-wrapper">
                <!-- Header -->
                    <header id="header" class="alt">
                        <h1><a href="index.html">Milion Rocket</a></h1>
                        <nav id="nav">
                            <ul>
                                <li class="special">
                                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                                    <div id="menu">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="/comojogar">Sobre o Jogo</a></li>
                                            <li><a href="#2">Ofertas</a></li>
                                            <li><a href="#3">Parceiros</a></li>
                                            <li><a href="<?php echo e(url('register')); ?>">Registro</a></li>
                                            <li><a href="<?php echo e(url('login')); ?>">Conecte-se</a></li>
                                            <li><a href="<?php echo e(route('password.request')); ?>">Recuperar senha</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </header>
                    <div id="lBoxVideo" style="display:none;position: fixed;width: 100vw;height: 100vh; top:0; left:0; z-index: 10000;background-color: rgba(0,0,0,0.9);">
                        <a href="javascript:void(0);" onClick="javascript:document.getElementById('lBoxVideo').style.display='none';document.getElementById('videoPlayer').pause()" style="position: absolute;right: 20px;top: 20px;background-color: #000;color: #fff;padding: 2px 5px;border-radius: 3px;">Fechar</a>
                        <video id="videoPlayer" controls="" style="background: #ccc;position: absolute;width: 310px;height: 552px;margin: -276px 0 0 -155px;top: 50%;left: 50%;"> 
                            <source src="/img/comojogar.mp4" type="video/mp4">
                        </video>
                    </div>
                    <!-- Banner -->
                    <section id="banner">

                        <div class="inner">

                            <p></br></p>

                            <p><img src="<?php echo e(asset('front-assets/assets/images/logomr.png')); ?>" alt="" style="width:90%; max-width:370px;" /></p>

                            <h2>B??nus de Boas-Vindas</h2>

                            <p>Inscreva-se e ganhe b??nus* exclusivo<br />
                            de lan??amento!<br />
                            <i style="font-size: 0.5rem; color: #999;">(apenas para dep??sitos a partir de R$30,00)</i>
                            </p>

                            <ul class="">

                                <li><a href="https://www.millionrocket.com/stage/register" class="button primary">Comece agora</a></li>

                            </ul>

                        </div>

                        <!--a href="#one" class="more scrolly"></a-->

                    </section>



                <!-- One -->

                    <section id="one" class="wrapper style1 special">

                        <div class="inner">

                            <header class="major">

                                <h2>Milion Rocket</h2>

                                <p>Logo ap??s a ativa????o e cadastro da conta, </br>fa??a o seu primeiro dep??sito a partir de R$20 para come??ar a jogar.</p>

                            </header>
                            <ul class="icons major">
                                <li><img src="<?php echo e(asset('front-assets/assets/images/logomr.png')); ?>" alt="" width="300px" /></li>
                            </ul>

                        </div>

                    </section>



                <!-- Two -->

                    <section id="two" class="wrapper alt style2">

                        <section class="spotlight">

                            <div class="image"><img src="<?php echo e(asset('front-assets/assets/images/pic02.jpg')); ?>" alt="" /></div><div class="content">

                                <h2>24h ONLINE<br />

                                Jogo interativo que voc?? pode ganhar pr??mios no mesmo minuto!</h2>

                                <p>Million Rocket ?? a mais nova plataforma de jogos ONLINE, 

em que os jogadores depositam o valor m??nimo de R$20,00 e jogam o valor 

desejado com chance de parar o disparo do foguete antes do CRASHED para vencer receber os pr??mios.</p>

                            </div>

                        </section>

                        <section class="spotlight">

                            <div class="image"><img src="<?php echo e(asset('front-assets/assets/images/pic01.jpg')); ?>" alt="" /></div><div class="content">

                                <h2>Vamos come??ar seu jogo agora?</h2>

                                <p>Nossa plataforma conta com um ??timo suporte para d??vidas, um chat onde os jogadores podem trocar orienta????es e um jogo super divertido: Million Rocket. <br><br>

Oferecemos c??digos promocionais -CodeRocket- que garantem at?? 100% de b??nus de at?? R $1.000 como um brinde de boas-vindas. 

Deste modo, quando voc?? deposita R$300, voc?? receber?? R$600 em bonifica????o para fazer suas apostas.

</p>

                            </div>
                        </section>
                    </section>

                    <section id="cta" class="wrapper style4">
                        <div class="inner">
                            <header>
                                <h2>Convide Amigos, Ganhe Dinheiro.</h2>
                                <p>Convide seus amigos que ainda n??o est??o na Million Rocket e receba R$20.00 por cada amigo que se inscrever.
Voc?? pode convidar quantos amigos desejar, n??o tem um limite. Isso significa que tamb??m n??o h?? limite para quanto voc?? pode ganhar!</p>
                            </header>
                            <ul class="actions stacked">
                            </ul>
                        </div>
                    </section>

                    <!-- Footer -->
                    <footer id="footer">
                        <ul class="icons">
                            <li><a href="https://www.instagram.com/millionrocketofc/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                        </ul>
                        <ul class="copyright">
                            <li>&copy;</li><li>Todos os Direitos reservados a<a href="#">  Plataforma de Jogos MilionRocket.com </a></li>
                        </ul>
                    </footer>
            </div>
            <!-- Scripts -->
            <script src="<?php echo e(asset('front-assets/assets/js/jquery.min.js')); ?>"></script>
            <script src="<?php echo e(asset('front-assets/assets/js/jquery.scrollex.min.js')); ?>"></script>
            <script src="<?php echo e(asset('front-assets/assets/js/jquery.scrolly.min.js')); ?>"></script>
            <script src="<?php echo e(asset('front-assets/assets/js/browser.min.js')); ?>"></script>
            <script src="<?php echo e(asset('front-assets/assets/js/breakpoints.min.js')); ?>"></script>
            <script src="<?php echo e(asset('front-assets/assets/js/util.js')); ?>"></script>
            <script src="<?php echo e(asset('front-assets/assets/js/main.js')); ?>"></script>
    </body>
    <script type="text/javascript">
        
    </script>
</html>
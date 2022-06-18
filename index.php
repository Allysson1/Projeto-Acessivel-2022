<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>




    <div class="BotaoConteudoPrincipal">
        <button onclick="window.location.href='index.php#topo';" class="btn btn-dark col-12 col-sm-12 col-md-12">Ir
            Direto para O conteúdo Principal</button>
    </div>

    <?php include 'header.php'; ?>

        <header>
            <img class="imgTopoHome" src="images/UrsinhosHQ.png"
                alt="imagem com o fundo preto com a Palavra Ursinhos em cor branca e HQ na cor azul">
        </header>

        <div class="container-fluid">

            <div class="row">

                <h1 id="topo" class="p-5 h1superior">Resumo site</h1>

                <main>
                    <article class="col-12 col-sm-12 col-md-12">

                        <P>Este é um site com o propósito de trazer Notícias, histórias e alguns dos melhores
                            personagens
                            que estão dentro do Universpo Marvel e do Universo DC.
                        </P>

                        <div class="col-lg-12 col-xl-12">
                            <h2 class="p-5">
                                Personagens DC
                            </h2>

                            <div class="row">
                                <Section class="pb-5 col-12 col-md-6 col-lg-3  float-start">
                                    <h6 class="invisible">Doninha</h6>
                                    <img class="imagemPersonagem pb-1 col-6 col-md-6 col-xl-6"
                                        src="images/Per-doninha.png"
                                        alt="Imagem do doninha com uma bandeira enorme dos Estados Unidos atrás dele">
                                    <p class="col-md-12">Conheça mais sobre O Doninha, personagem da DC Comics</p>
                                    <button onclick="window.location.href='doninha.php';"
                                        class="botaonoticiaHome">Clique
                                        aqui</button>
                                </Section>

                                <Section class="pb-5 col-12 col-md-6 col-lg-3">
                                    <h6 class="invisible">Batman</h6>
                                    <img class=" imagemPersonagem col-6 col-lx-6 pb-1" src="images/Per-Batman.png"
                                        alt="Imagem do persnogem Batman, pulando e abrindo sua capa, que forma a sirueta de um morcego, no qual seu persnonagem se baseia">
                                    <p class="col-md-12">Conheça mais sobre o Batman, protetor de Gotham City</p>
                                    <button onclick="window.location.href='batman.php'" class="botaonoticiaHome">Clique
                                        aqui</button>
                                </Section>

                                <Section class="pb-5 col-12 col-md-6 col-lg-3  float-start">
                                    <h6 class="invisible">Super-Choque</h6>
                                    <img class="imagemPersonagem pb-1 col-6 col-md-6 col-xl-6"
                                        src="images/Per-SuperChoque.png"
                                        alt="Imagem do personagem Super-Choque, com seu uniforme Azul, amarelo e preto, utilizandoo mascara em seusolhos e flutuando entre os prédios com seu disco">
                                    <p class="col-md-12">O jovem Virgil Hawkins ganha incríveis poderes eletromagnéticos
                                        após de ser exposto a um estranho gás.</p>
                                    <button onclick="window.location.href='superchoque.php'" class="botaonoticiaHome">Clique
                                        aqui</button>
                                </Section>

                                <Section class="pb-5 col-12 col-md-6 col-lg-3">
                                    <h6 class="invisible">Arqueiro</h6>
                                    <img class="imagemPersonagem col-6 col-lx-6 pb-1"
                                        src="images/Per-Arqueiro-verde.png"
                                        alt="Imagem do personagem Arqueiro verde em uma luta corporal com um vilão">
                                    <p class="col-md-12">Conheça mais sobre O arqueiro Verde, personagem famoso do mundo
                                        DC
                                    </p>
                                    <button onclick="window.location.href='arqueiro.php'" class="botaonoticiaHome">Clique
                                        aqui</button>
                                </Section>
                            </div>
                        </div>





                        <div class="col-lg-12 float-xl-end col-xl-12">
                            <h2 class="p-5">
                                Personagens Marvel
                            </h2>

                            <div class="row">
                                <Section class="pb-5 col-12 col-md-6 col-lg-3  float-start">
                                    <h6 class="invisible">Pantera</h6>
                                    <img class="pb-1 imagemPersonagem col-6 col-md-6 col-xl-6 "
                                        src="images/Per-pantera.png"
                                        alt="Imagem do Pantera negra com seu uniforme preto com traços de pantera sentado em seu trono">
                                    <p class="col-md-12">Conheça a história de T'Challa, o famoso Pantera Negra -
                                        Wakanda
                                        Forever</p>
                                    <button onclick="window.location.href='pantera.php';" class="botaonoticiaHome">Clique
                                        aqui</button>
                                </Section>

                                <Section class="pb-5 col-12 col-md-6 col-lg-3">
                                    <h6 class="invisible">Loki</h6>
                                    <img class="imagemPersonagem col-6 col-md-6 col-xl-6 pb-1" src="images/Per-Loki.png"
                                        alt="Imagem do persnogem Loki com sua roupa verde, com enfeites na cabeça cor de ouro e com um enorme sorriso diabólico">
                                    <p class="col-md-12">Conheça mais sobre Loki, famoso personagem da Marvel</p>
                                    <button onclick="window.location.href='loki.php'" class="botaonoticiaHome">Clique
                                        aqui</button>
                                </Section>

                                <Section class="pb-5 col-12 col-md-6 col-lg-3  float-start">
                                    <h6 class="invisible">venom</h6>
                                    <img class="pb-1 imagemPersonagem col-6 col-md-6 col-xl-6"
                                        src="images/Per-venom.png"
                                        alt="Imagem do personagem Venom com metade de sua face, e a outra metade com a face de seu hospedeiro">
                                    <p class="col-md-12">Conheça mais sobre Venom, famoso personagem da Marvel</p>
                                    <button onclick="window.location.href='Venom.php'" class="botaonoticiaHome">Clique
                                        aqui</button>
                                </Section>

                                <Section class="pb-5 col-12 col-md-6 col-lg-3">
                                    <h6 class="invisible">Groot</h6>
                                    <img class="imagemPersonagem col-6 col-md-6 col-xl-6 pb-1"
                                        src="images/Per-groot.png"
                                        alt="Imagem do persnogem Groot quando Bebê, com a luva de Thanos dourada com as joias do infinito">
                                    <p class="col-md-12">Conheça mais sobre o Groot, famoso personagem fictício da
                                        Marvel
                                    </p>
                                    <button onclick="window.location.href='groot.php'" class="botaonoticiaHome">Clique
                                        aqui</button>
                                </Section>
                            </div>
                        </div>
                    </article>




                    <h2 class="p-5">
                        Vídeos
                    </h2>

                    <aside>
                    <div>
                        <object class="col-12 col-sm-12 col-md-12 col-lg-6 pb-5 px-md-1 float-lg-start Video1Home"
                            data="https://www.youtube.com/embed/AnNy_pz7uSQ">Video do Loki apanhando do Hulk em
                            Vingadores</object>

                        <object class="col-12 col-sm-6 col-md-12 col-lg-6 pb-5 px-md-1 Video2Home float-sm-start"
                            data="https://www.youtube.com/embed/XECX2J-Q4i8">Arqueiro Verde em discursão com a Liga da
                            Justiça</object>

                        <object class="col-12 col-sm-6 col-md-12 col-lg-6 pb-5 px-md-1 Video2Home"
                            data="https://www.youtube.com/embed/iqL41IPD5XE">Baby Groot armando a Bomba em Guardiões da
                            Galáxia</object>
                    </div>

                </aside>



                    <h2 class="p-5">
                        Noticias
                    </h2>

                

                        <div class=" row">
                            <div class=" pb-5 float-sm-start float-lg-none col-12 col-sm-6 col-md-6 col-lg-3">
                                <img class="col-12" src="images/Sean-Gunn-Doninha.jpg"
                                    alt="Imagem do Doninha com a frase (Sean Gunn as) sobre sua cabeça e fundo com a cor roxo">
                                <h3>Conheça quem Interpretou o Doninha</h3>
                                <h6>Autor: Állysson Ernandes</h6>
                                <p>Um breve resumo de como o Doninha foi criado e por quem foi interpretado no filme
                                    "Esquadão
                                    Suícida."
                                </p>
                                <button onclick="window.location.href='materia-doninha.php'" class="botaonoticiaHome">Clique
                                    aqui</button>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 float-sm-end col-lg-3">
                                <img class="col-12" src="images/Loki10.jpg"
                                    alt="Imagem do persnogem Loki com sua versão animada em quadrinhos">
                                <h3>Quais são os poderes do Loki, o Deus da trapaça?</h3>
                                <h6>Autor: Ana Clara</h6>
                                <p>Loki, o vilão que tem sua própria série no Disney+, é um dos personagens mais
                                    poderosos do Universo Cinematográfico Marvel (MCU).
                                </p>
                                <button onclick="window.location='#'" class="botaonoticiaHome">Clique aqui</button>
                            </div>

                            <div class="px-3 pb-5 float-sm-start float-lg-none col-12 col-sm-6 col-md-6 col-lg-3">
                                <img class="col-12" src="images/venom7.webp"
                                    alt="venom com uma expressão de grito correndo atrás de alguém">
                                <h3>Conheça mais curiosidades sobre Venom</h3>
                                <h6>Autor: Állysson Ernandes</h6>
                                <p>Um breve resumo de curiosidades sobre o Personagem Venom, famoso Anti-Héroi da marvel
                                    personagem da Marvel.
                                </p>
                                <button onclick="window.location.href='materia-venom.php'" class="botaonoticiaHome">Clique
                                    aqui</button>
                            </div>

                            <div class="col-12 col-sm-6 col-md-6 float-sm-end col-lg-3">
                                <img class="col-12" src="images/arqueiro-verde-dc.jpg"
                                    alt="">
                                <h3>Conheça mais curiosidade sobre o mundo do Arqueiro Verde</h3>
                                <h6>Autor: Nayara Nunes</h6>
                                <p>O que aconteceu com Stephen Amell, ator que interpretava Arqueiro
                                        Verde na série Arrow?
                                </p>
                                <button onclick="window.location='materia-Arqueiro.php'" class="botaonoticiaHome">Clique aqui</button>
                            </div>


                        </div>

                    <div>
                        <footer class="BotaoVoltarAoTopo row col-5 pt-3">
                            <button onclick="window.location.href='index.php#topo';"
                                class="col-12 btn btn-dark justify-content-center">Voltar ao Topo</button>
                        </footer>
                    </div>

                </main>
            </div>
            <?php include 'footer.php'; ?>

        </div>

</body>



</html>
<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto - Ritual do Café</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="canonical" href="">

        <?php include 'inc/init.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/ritual-do-cafe.css">
    </head>	
    <body id="pagRitual" class="interna">
        <?php include 'inc/header.php'; ?>
        <div id="page">			
            <div class="conteudo">
                <div class="teaserInternas teaserRitual">
                    <span class="faixaTopBanner"></span>
                    <h1>RITUAL DO CAFÉ</h1>
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="ritual">
                    <article class="ritualLeft drinkLeft">
                        <div class="container">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="texto">
                                    <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                                        <span typeof="v:Breadcrumb">
                                            <a href="<?php echo url_path() ?>" rel="v:url" property="v:title" title="Home">HOME</a>
                                        </span>
                                        <span class="space">-</span>
                                        <span typeof="v:Breadcrumb">
                                            <span rel="v:url" property="v:title">Ritual do Café</span>
                                        </span>
                                    </div><br>
                                    <h2>CAFÉ COADO</h2>
                                    <p>
                                        <strong>Material:</strong><br>
                                        Água: é importante o uso de água filtrada de boa qualidade.<br>
                                        Café Moido: a moagem deve ser fina/média<br>
                                        Bule<br>
                                        Filtro de Papel<br>
                                        Porta Filtro
                                    </p>
                                    <p>
                                        <strong>Modo de preparo</strong><br>
                                        Leve a água para ferver e desligue a chama um pouco antes da fervura.<br>
                                        Coloque o filtro de papel no porta filtro e o posicione em cima do bule. Use uma pequena quantidade de água para umedecer o papel (isso evita que o café fique com um gasto residual do material).<br>
                                        Descarte toda a água utilizada neste processo.<br>
                                        Coloque o pó do café no filtro - utilize 4 colheres de sopa de pó de café (80g) para cada 1 litro de água.<br>
                                        Gentilmente, adicione um pouco de água no filtro apenas para umedecer o café. Pare antes que ele comece a ser filtrado.<br>
                                        Com cuidado, despeje o restante da água sobre o café, de maneira que o nível de água no filtro fique na metade ou 3/4 de preenchimento.<br>
                                        O processo deve levar de 3 a 4 minutos e está completo quando o restante do pó de café no filtro se tornar uma superfície irregular.<br>
                                        Consuma imediatamente.
                                    </p>
                                    <span class="faixa"></span>
                                </div>
                            </div>
                            <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="imgRitual">
                                    <img class="img-responsive" alt="cAFÉ cOADO" src="images/cafe-coado.png">
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <article class="ritualRight drinkRight">
                        <div class="container">
                            <div class="fr col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="texto">
                                    <span class="faixa"></span>
                                    <h2>CAFETEIRA ITALIANA</h2>
                                    <p>
                                        <strong>Material:</strong><br>
                                        Água: é importante o uso de água filtrada de boa qualidade.<br>
                                        Café Moido: a moagem deve ser média/grossa<br>
                                        Bule<br>
                                        Cafeteira Italiana
                                    </p>
                                    <p>
                                        <strong>Modo de preparo</strong><br>
                                        Ferva a água previamente em um bule.<br>
                                        Adicione a água fervida na câmara inferior da cafeteira, até a linha demarcada internamente.<br>
                                        Encaixe o filtro na câmara inferior e preencha-o com o pó de café. Ajuste a superfície para ficar regular mas não pressione o pó. Não deixe pó de café na borda.<br>
                                        Encaixe a câmara superior com cuidado, deixando o filtro sempre na posição vertical. Lembre-se de usar uma luva ou pano pois a água presente na câmara inferior estará quente.<br>
                                        Coloque a cafeteira no fogão, e acenda-o na menor boca do fogão. Deixe a tampa aberta.<br>
                                        Você começará a ver o café surgindo no fundo da câmara. Uma vez que o líquido se torne de cor  mais clara (castanho claro), retire a cafeteira do fogão e feche a tampa.<br>
                                        Coloque a cafeteira em um pano ou jogue um pouco de água fria para parar o processo de extração.<br>
                                        Espere até que não saia mais café, sirva.
                                    </p>
                                </div>
                            </div>
                            <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="imgRitual">
                                    <img class="img-responsive" alt="Capuccino" src="images/cafeteira-italiana.png">
                                </div>
                            </div>
                        </div>
                    </article>

                </section>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
    </body> 
</html>

<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto - Drinks</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="canonical" href="">

        <?php include 'inc/init.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/receitas.css">
    </head>	
    <body id="pagReceitas" class="interna">
        <?php include 'inc/header.php'; ?>
        <div id="page">			
            <div class="conteudo">
                <div class="teaserInternas teaserDrinks">
                    <span class="faixaTopBanner"></span>
                    <h1>DRINKS</h1>
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="receita">
                    <article class="receitaLeft drinkLeft">
                        <div class="container">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="texto">
                                    <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                                        <span typeof="v:Breadcrumb">
                                            <a href="<?php echo url_path() ?>" rel="v:url" property="v:title" title="Home">HOME</a>
                                        </span>
                                        <span class="space">-</span>
                                        <span typeof="v:Breadcrumb">
                                            <a href="<?php echo url_path() ?>receitas.php" rel="v:url" property="v:title" title="Receitas">RECEITAS</a>
                                        </span>
                                        <span class="space">-</span>
                                        <span typeof="v:Breadcrumb">
                                            <span rel="v:url" property="v:title">Drinks</span>
                                        </span>
                                    </div><br>
                                    <h2>CHOCOLACOINO</h2>
                                    <p>
                                        <strong>Ingredientes</strong><br>
                                        1 xícara de Café do Ponto Espresso<br>
                                        1/2 xícara de chocolate em pó<br>
                                        Creme de chantilly<br>
                                        Chocolate granulado
                                    </p>
                                    <p>
                                        <strong>Modo de preparo</strong><br>
                                        Misture o chocolate e o Café do Ponto Espresso e adoce a gosto.<br>
                                        Cubra com chantilly e polvilhe com chocolate granulado.
                                    </p>
                                    <span class="faixa"></span>
                                </div>
                            </div>
                            <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="imgReceita">
                                    <img class="img-responsive" alt="Chocolacoino" src="images/chocolacoino.png">
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <article class="receitaRight drinkRight">
                        <div class="container">
                            <div class="fr col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="texto">
                                    <span class="faixa"></span>
                                    <h2>O VERDADEIRO CAPUCCINO</h2>
                                    <p>
                                        <strong>Ingredientes</strong><br>
                                        1 xícara de Café do Ponto Tradicional (já coado)<br>
                                        1 colher de sopa de chocolate em pó<br>
                                        1 colher de sopa de açúcar<br>
                                        2 colheres de sopa de leite integral<br>
                                        Canela
                                    </p>
                                    <p>
                                        <strong>Modo de preparo</strong><br>
                                        Coloque o Café do Ponto Tradicional em uma vasilha pequena.<br>
                                        Adicione o chocolate em pó, açúcar e leite integral. Misture bem.<br>
                                        Sirva em uma xícara e decore com canela, a gosto.
                                    </p>
                                </div>
                            </div>
                            <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="imgReceita">
                                    <img class="img-responsive" alt="Capuccino" src="images/capuccino.png">
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <article class="receitaLeft drinkLeft">
                        <div class="container">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="texto">
                                    <h2>AMOR PERFEITO</h2>
                                    <p>
                                        <strong>Ingredientes</strong><br>
                                        2 xícaras (chá) de leite quente<br>
                                        1 tablete pequeno de chocolate meio amargo picado<br>
                                        3 colheres (sopa) de açúcar<br>
                                        1 colher (sopa) bem cheia de Café do Ponto Tradicional<br>
                                        1 colher (chá) rasa de canela em pó<br>
                                        3 colheres (sopa) de creme de leite
                                    </p>
                                    <p>
                                        <strong>Modo de preparo</strong><br>
                                        Ferva o leite, junte o Café do Ponto Tradicional e deixe a infusão por 5 minutos.<br>
                                        Coe, volte ao fogo, adicione o chocolate e o açúcar e mexa até derreter.<br>
                                        Retire do fogo, acrescente a canela, o creme de leite, bata no liquidificador até ficar espumante<br>
                                        Sirva quente ou gelado.
                                    </p>
                                    <span class="faixa"></span>
                                </div>
                            </div>
                            <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="imgReceita">
                                    <img class="img-responsive" alt="Amor Perfeito" src="images/amor-perfeito.png">
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

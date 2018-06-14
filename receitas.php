<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto - Receitas</title>
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
                <div class="teaserInternas teaserReceitas">
                    <span class="faixaTopBanner"></span>
                    <h1>RECEITAS</h1>
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="receitas">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                                <span typeof="v:Breadcrumb">
                                    <a href="<?php echo url_path() ?>" rel="v:url" property="v:title" title="Home">HOME</a>
                                </span>
                                <span class="space">-</span>
                                <span typeof="v:Breadcrumb">
                                    <span rel="v:url" property="v:title">Receitas</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="introReceitas">
                                <h2>SELECIONE NOSSAS RECEITAS:</h2>
                                <span class="faixa"></span>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="selecionaReceita">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <a class="linkReceita" href="<?php echo url_path() ?>receitas-drinks.php" title="Drinks">
                                    <img class="img-responsive" alt="Drinks" src="images/img-drinks.jpg">
                                    <span class="hover">DRINKS</span>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <a class="linkReceita" href="<?php echo url_path() ?>receitas-pratos.php" title="Pratos">
                                    <img class="img-responsive" alt="Pratos" src="images/img-pratos.jpg">
                                    <span class="hover">PRATOS</span>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <a class="linkReceita" href="<?php echo url_path() ?>receitas-sobremesas.php" title="Sobremesas">
                                    <img class="img-responsive" alt="Sobremesas" src="images/img-sobremesas.jpg">
                                    <span class="hover">SOBREMESAS</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
    </body> 
</html>

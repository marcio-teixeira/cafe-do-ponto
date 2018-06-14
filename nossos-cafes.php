<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto - Nossos Cafés</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="canonical" href="">

        <?php include 'inc/init.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/nossos-cafes.css">
    </head>	
    <body id="pagCafes" class="interna">
        <?php include 'inc/header.php'; ?>
        <div id="page">			
            <div class="conteudo">
                <div class="teaserInternas teaserCafes">
                    <span class="faixaTopBanner"></span>
                    <h1>NOSSOS CAFÉS</h1>
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="cafes">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                                <span typeof="v:Breadcrumb">
                                    <a href="<?php echo url_path() ?>" rel="v:url" property="v:title" title="Home">HOME</a>
                                </span>
                                <span class="space">-</span>
                                <span typeof="v:Breadcrumb">
                                    <span rel="v:url" property="v:title">Nossos Cafés</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="escolheIntensidade">
                                <h2>ESCOLHA PELA INTENSIDADE</h2>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);" title="Intensidade 6" rel="int6">
                                            <span class="numero">6</span>
                                            <span class="circulo"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Intensidade 7" rel="int7">
                                            <span class="numero">7</span>
                                            <span class="circulo"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Intensidade 8" rel="int8">
                                            <span class="numero">8</span>
                                            <span class="circulo"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Intensidade 9" rel="int9">
                                            <span class="numero">9</span>
                                            <span class="circulo"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" title="Intensidade 10" rel="int10">
                                            <span class="numero">10</span>
                                            <span class="circulo"></span>
                                        </a>
                                    </li>
                                </ul>
                                <span class="faixa"></span>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="cafes">
                            <div class="cafe">
                                <a class="int7" href="<?php echo url_path() ?>cafe-do-ponto-tradicional.php" title="Tradicional">
                                    <img alt="Tradicional" src="images/cafe-tradicional.png">
                                </a>
                            </div>
                            <div class="cafe">
                                <a class="int10" href="<?php echo url_path() ?>cafe-do-ponto-extraforte.php" title="Extraforte">
                                    <img alt="Extraforte" src="images/cafe-extraforte.png">
                                </a>
                            </div>
                            <div class="cafe">
                                <a class="int9" href="<?php echo url_path() ?>cafe-do-ponto-exportacao.php" title="Exportação">
                                    <img alt="Exportação" src="images/cafe-exportacao.png">
                                </a>
                            </div>
                            <div class="cafe">
                                <a class="int7" href="<?php echo url_path() ?>cafe-do-ponto-aralto.php" title="Aralto">
                                    <img alt="Aralto" src="images/cafe-aralto.png">
                                </a>
                            </div>
                            <div class="cafe">
                                <a class="int8" href="<?php echo url_path() ?>cafe-do-ponto-safra-especial.php" title="Safra Especial">
                                    <img alt="Safra Especial" src="images/cafe-safra-especial.png">
                                </a>
                            </div>
                            <div class="cafe">
                                <a class="int8" href="<?php echo url_path() ?>cafe-do-ponto-aromatizados.php" title="Aromatizados">
                                    <img alt="Aromatizados" src="images/cafe-aromatizado.png">
                                </a>
                            </div>
                            <div class="cafe">
                                <a class="int9" href="<?php echo url_path() ?>cafe-do-ponto-espresso.php" title="Espresso">
                                    <img alt="Espresso" src="images/cafe-espresso.png">
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

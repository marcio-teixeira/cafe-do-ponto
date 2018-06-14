<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto - Safra Especial</title>
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
                <div class="teaserInternas teaserSafra">
                    <span class="faixaTopBanner"></span>
                    <h1>SAFRA ESPECIAL</h1>
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="produto" class="produtoSafra">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                                <span typeof="v:Breadcrumb">
                                    <a href="<?php echo url_path() ?>" rel="v:url" property="v:title" title="Home">HOME</a>
                                </span>
                                <span class="space">-</span>
                                <span typeof="v:Breadcrumb">
                                    <a href="<?php echo url_path() ?>nossos-cafes.php" rel="v:url" property="v:title" title="Banho">NOSSOS CAFÉS</a>
                                </span>
                                <span class="space">-</span>
                                <span typeof="v:Breadcrumb">
                                    <span rel="v:url" property="v:title">Safra Especial</span>
                                </span>
                            </div>
                        </div>
                        <div class="colTexto col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="textoProd">
                                <div class="texto1">
                                    <h2>
                                        CAFÉ DO PONTO SAFRA ESPECIAL<br> 
                                        250G POUCH
                                    </h2>
                                    <p>É um café produzido através de um lote limitado, com o melhor da safra de cada ano.</p>
                                </div>
                                <span class="faixa"></span>
                                <div class="texto2">
                                    <p>
                                        ATRIBUTOS:<br>
                                        <strong>ENCORPADO E HARMÔNICO</strong>
                                    </p>
                                    <p>
                                        INTENSIDADE:<br>
                                        <img alt="Intensidade 8" src="images/intensidade-8.png">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="imgProd">
                                <img class="img-responsive" alt="Café do Ponto Safra Especial" src="images/safra-especial-slider-home.png">
                                <div class="linkCafes">
                                    <ul>
                                        <li class="linkTradicional"><a href="<?php echo url_path() ?>cafe-do-ponto-tradicional.php" title="Tradicional"></a></li>
                                        <li class="linkExtraforte"><a href="<?php echo url_path() ?>cafe-do-ponto-extraforte.php" title="Extraforte"></a></li>
                                        <li class="linkExportacao"><a href="<?php echo url_path() ?>cafe-do-ponto-exportacao.php" title="Exportação"></a></li>
                                        <li class="linkAralto"><a href="<?php echo url_path() ?>cafe-do-ponto-aralto.php" title="Aralto"></a></li>
                                        <li class="linkSafra"><a href="<?php echo url_path() ?>cafe-do-ponto-safra-especial.php" title="Safra Especial"></a></li>
                                        <li class="linkAromatizados"><a href="<?php echo url_path() ?>cafe-do-ponto-aromatizados.php" title="Aromatizados"></a></li>
                                        <li class="linkEspresso"><a href="<?php echo url_path() ?>cafe-do-ponto-espresso.php" title="Espresso"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
    </body> 
</html>

<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="canonical" href="">

        <?php include 'inc/init.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/slick.css">
        <link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/slick-theme.css">
    </head>	
    <body>
        <?php include 'inc/header.php'; ?>
        <div id="page">			
            <div class="conteudoHome">
                <div class="banner">
                    <span class="faixaTopBanner"></span>
                    <img class="img-responsive visible-lg visible-md" alt="Café do Ponto" src="<?php echo url_path() ?>images/banner-home.jpg">
                    <img class="img-responsive visible-sm visible-xs" alt="Café do Ponto" src="<?php echo url_path() ?>images/banner-home-mobile.jpg">
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="sliderProdutos">
                    <div class="container-fluid">
                        <div class="slider">
                            <div class="item">
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="textoProd textoTradicional">
                                        <div class="boxTexto">
                                            <h2>
                                                CAFÉ DO PONTO TRADICIONAL<br> 
                                                500G A VÁCUO
                                            </h2>
                                            <p>
                                                Tem aroma agradável,<br>
                                                corpo médio e sabor equilibrado.
                                            </p>
                                            <div class="saibaMais">
                                                <span></span>
                                                <a class="saibaMais" href="<?php echo url_path() ?>cafe-do-ponto-tradicional.php" title="saiba mais">saiba mais <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="imgProd">
                                        <img class="img-responsive" alt="Café do Ponto Tradicional" src="images/tradicional-slider-home.png">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="textoProd textoExtraforte">
                                        <div class="boxTexto">
                                            <h2>
                                                CAFÉ DO PONTO EXTRAFORTE<br> 
                                                500G A VÁCUO
                                            </h2>
                                            <p>É um delicioso café encorpado com ponto de torra que revela um aroma intenso e envolvente.</p>
                                            <div class="saibaMais">
                                                <span></span>
                                                <a class="saibaMais" href="#" title="saiba mais">saiba mais <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="imgProd">
                                        <img class="img-responsive" alt="Café do Ponto Extra Forte" src="images/extra-forte-slider-home.png">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="textoProd textoExportacao">
                                        <div class="boxTexto">
                                            <h2>
                                                CAFÉ DO PONTO EXPORTAÇÃO<br> 
                                                250G POUCH
                                            </h2>
                                            <p>É um café aromático com sabor prolongado, resultado de uma seleção cuidadosa de grãos de alta qualidade.</p>
                                            <div class="saibaMais">
                                                <span></span>
                                                <a class="saibaMais" href="#" title="saiba mais">saiba mais <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="imgProd">
                                        <img class="img-responsive" alt="Café do Ponto Extra Forte" src="images/exportacao-slider-home.png">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="textoProd textoAralto">
                                        <div class="boxTexto">
                                            <h2>
                                                CAFÉ DO PONTO ARALTO<br> 
                                                250G POUCH
                                            </h2>
                                            <p>É resultado de um café cultivado em regiões montanhosas, onde o clima é ameno e o fruto demora mais tempo para amadurecer.</p>
                                            <div class="saibaMais">
                                                <span></span>
                                                <a class="saibaMais" href="#" title="saiba mais">saiba mais <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="imgProd">
                                        <img class="img-responsive" alt="Café do Ponto Extra Forte" src="images/aralto-slider-home.png">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="textoProd textoEspecial">
                                        <div class="boxTexto">
                                            <h2>
                                                CAFÉ DO PONTO SAFRA ESPECIAL<br> 
                                                250G POUCH
                                            </h2>
                                            <p>É um café produzido através de um lote limitado, com o melhor da safra de cada ano.</p>
                                            <div class="saibaMais">
                                                <span></span>
                                                <a class="saibaMais" href="#" title="saiba mais">saiba mais <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="imgProd">
                                        <img class="img-responsive" alt="Café do Ponto Extra Forte" src="images/safra-especial-slider-home.png">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="textoProd textoAromatizados">
                                        <div class="boxTexto">
                                            <h2>
                                                CAFÉ DO PONTO AROMATIZADOS<br> 
                                                100G POUCH
                                            </h2>
                                            <p>Combinação dos melhores grãos de café com aromas envolventes de Amêndoas Torradas e Chocolate Trufado. Ideal para sair da rotina.</p>
                                            <div class="saibaMais">
                                                <span></span>
                                                <a class="saibaMais" href="#" title="saiba mais">saiba mais <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="imgProd">
                                        <img class="img-responsive" alt="Café do Ponto Extra Forte" src="images/aromatizados-slider-home.png">
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="textoProd textoEspresso">
                                        <div class="boxTexto">
                                            <h2>
                                                CAFÉ DO PONTO ESPRESSO<br> 
                                                1KG POUCH
                                            </h2>
                                            <p>É uma combinação de grãos, provenientes das melhores regiões cafeeiras do Brasil. Sua torra média, resulta um Espresso encorpado, aromático e crema cor avelã.</p>
                                            <div class="saibaMais">
                                                <span></span>
                                                <a class="saibaMais" href="#" title="saiba mais">saiba mais <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="colSlider col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="imgProd">
                                        <img class="img-responsive" alt="Café do Ponto Extra Forte" src="images/espresso-slider-home.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>

        <script src="<?php echo url_path() ?>js/slick.js"></script>
        <script>
            $(document).ready(function(){
                $('#sliderProdutos .slider').slick({
                    dots: true,
                    arrows: false,
                    infinite: true,
                    speed: 500,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    fade: true,
                    cssEase: 'linear'
                });
            })
        </script>
    </body> 
</html>

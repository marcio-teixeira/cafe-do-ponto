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
                <div class="teaserInternas teaserSobremesas">
                    <span class="faixaTopBanner"></span>
                    <h1>SOBREMESAS</h1>
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="receita">
                    <article class="receitaLeft sobremesas-bg1">
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
                                            <span rel="v:url" property="v:title">Sobremesas</span>
                                        </span>
                                    </div><br>
                                    <h2>ROCAMBOLE DE CAFÉ E CHOCOLATE</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet neque sit amet lacinia viverra. Donec iaculis eu mi sed mollis. Aenean ac urna tincidunt orci placerat bibendum non et lorem. Vestibulum fringilla diam vel rhoncus gravida. Proin nec est sed nisi viverra condimentum id et risus. Praesent vestibulum elit at condimentum tincidunt. Praesent sollicitudin vel orci a dapibus. Praesent bibendum, ligula ac pharetra viverra, erat felis dictum sem, non cursus mauris mi eu diam. Mauris ut auctor orci, finibus volutpat leo.
                                    </p>
                                    <span class="faixa"></span>
                                </div>
                            </div>
                            <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="imgReceita">
                                    <img class="img-responsive" alt="Chocolacoino" src="images/rocambole.png">
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <article class="receitaRight sobremesas-bg2">
                        <div class="container">
                            <div class="fr col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="texto">
                                    <span class="faixa"></span>
                                    <h2>BOLO DE MEL</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet neque sit amet lacinia viverra. Donec iaculis eu mi sed mollis. Aenean ac urna tincidunt orci placerat bibendum non et lorem. Vestibulum fringilla diam vel rhoncus gravida. Proin nec est sed nisi viverra condimentum id et risus. Praesent vestibulum elit at condimentum tincidunt. Praesent sollicitudin vel orci a dapibus. Praesent bibendum, ligula ac pharetra viverra, erat felis dictum sem, non cursus mauris mi eu diam. Mauris ut auctor orci, finibus volutpat leo.
                                    </p>
                                </div>
                            </div>
                            <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="imgReceita">
                                    <img class="img-responsive" alt="Capuccino" src="images/bolo-mel.png">
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <article class="receitaLeft sobremesas-bg3">
                        <div class="container">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="texto">
                                    <h2>CUPCAKES</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet neque sit amet lacinia viverra. Donec iaculis eu mi sed mollis. Aenean ac urna tincidunt orci placerat bibendum non et lorem. Vestibulum fringilla diam vel rhoncus gravida. Proin nec est sed nisi viverra condimentum id et risus. Praesent vestibulum elit at condimentum tincidunt. Praesent sollicitudin vel orci a dapibus. Praesent bibendum, ligula ac pharetra viverra, erat felis dictum sem, non cursus mauris mi eu diam. Mauris ut auctor orci, finibus volutpat leo.
                                    </p>
                                    <span class="faixa"></span>
                                </div>
                            </div>
                            <div class="colImg col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="imgReceita">
                                    <img class="img-responsive" alt="Amor Perfeito" src="images/cupcakes.png">
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

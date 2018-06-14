<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto - Contato</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="canonical" href="">

        <?php include 'inc/init.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/formularios.css">
    </head>	
    <body id="pagContato" class="interna">
        <?php include 'inc/header.php'; ?>
        <div id="page">			
            <div class="conteudo">
                <div class="teaserInternas teaserCafes">
                    <span class="faixaTopBanner"></span>
                    <h1>CONTATO</h1>
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="formularios">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                                <span typeof="v:Breadcrumb">
                                    <a href="<?php echo url_path() ?>" rel="v:url" property="v:title" title="Home">HOME</a>
                                </span>
                                <span class="space">-</span>
                                <span typeof="v:Breadcrumb">
                                    <span rel="v:url" property="v:title">Contato</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                            <h2>SUA MENSAGEM FOI ENVIADA COM SUCESSO!</h2>
                            <p>
                                Em breve entraremos em contato com você
                            </p>
                            
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
    </body> 
</html>

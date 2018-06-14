<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto - Cardápio</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="canonical" href="">

        <?php include 'inc/init.php'; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/cardapio.css">
    </head>	
    <body id="pagCafeterias" class="interna">
        <?php include 'inc/header.php'; ?>
        <div id="page">			
            <div class="conteudo">
                <div class="teaserInternas teaserCardapio">
                    <span class="faixaTopBanner"></span>
                    <h1>CARDÁPIO</h1>
                    <span class="faixaBottomBanner"></span>
                </div>

                <section id="cardapio">
                    <div class="cardapio1">
                        <div class="container">
                            <div class="col-lg-6 col-lg-offset-6 col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-12">
                                <div class="texto">
                                    <h2>CARDÁPIO CAFÉ DO PONTO</h2>
                                    <p>Nós do Café do Ponto somos apaixonados por café.  Portanto, nos preocupamos com todos os detalhes do processo: desde o cultivo até a extração de cada xícara de espresso. </p>
                                    <p>São mais de 60 anos de tradição e amor pela arte de fazer café, que se traduz na maior linha de produtos existente no mercado, incluindo blends especiais e aromatizados e os cafés regionais. Pensando nisso, desenvolvemos um cardápio saboroso e diversificado.</p>
                                    <p>Aqui você encontrará algumas de nossas especialidades, resultado de safras cultivadas em regiões nobres do país. É o prazer de proporcionar a degustação de um café de qualidade superior, compartilhando com você não só nossa expertise no universo de cafés, mas principalmente nossa paixão.</p>
                                    <span class="faixa"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cardapio2">
                        <div class="container">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="texto">
                                    <span class="faixa"></span>
                                    <h2>RITUAL DO ARALTO</h2>
                                    <p>O espresso Aralto possui em sua composição grãos provenientes de regiões com altitudes superiores a 1.000 metros no Cerrado Mineiro e parte do Sul de Minas. Nessas altitudes, os grãos amadurecem lentamente produzindo um sabor refinado, rico e com média acidez. Para desfrutar melhor o sabor do espresso Aralto, é necessário limpar as mãos e o rosto com uma toalha quente, para eliminar os odores do dia-a-dia. Então, deve-se tomar um pouco de água, com ou sem gás, para limpar as glândulas palatinas. Só então, deve-se saborear o café.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="nossoCardapio">
                    <span class="faixa"></span>
                    <img class="img-responsive visible-lg visible-md" alt="Cardápio" src="images/cardapio.jpg">
                    <img class="img-responsive visible-sm" alt="Cardápio" src="images/cardapio-medio.jpg">
                    <img class="img-responsive visible-xs" alt="Cardápio" src="images/cardapio-mobile.jpg">
                </div>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
    </body> 
</html>

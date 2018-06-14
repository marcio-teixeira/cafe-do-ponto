<?php
require('inc/globals.php'); // Require in all pages
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="pt-br"><![endif]-->
<!--[if IE 8]><html class="ie8" lang="pt-br"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="pt-br"><!--><html lang="pt-br"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Café do Ponto - Seja um Franqueado</title>
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
                    <h1>SEJA UM FRANQUADO</h1>
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
                                    <span rel="v:url" property="v:title">Seja um Franqueado</span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                            <h2>FORMULÁRIO DE FRANQUEADOS</h2>
                            <p>Tenha uma franquia Café do Ponto!<br>Entre em contato conosco através do formulário abaixo:</p>
                            <form name="formFranquia" id="formFranquia" method="post" action="">
                                <div class="row">
                                    <div class="campo col-lg-12">
                                        <input class="ipt" name="nome" id="nome" type="text" placeholder="NOME:" required>
                                    </div>
                                    <div class="campo col-lg-12">
                                        <input class="ipt" name="email" id="email" type="email" placeholder="E-MAIL:" required>
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input class="ipt cel" name="telefone" id="telefone" type="text" placeholder="TELEFONE:" required>
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input class="ipt cel" name="celular" id="celular" type="text" placeholder="CELULAR:">
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <select id="capitalDisponivel" name="capitalDisponivel" required>
                                            <option value="">CAPITAL DISPONÍVEL:</option>
                                            <option value="225000,00">De R$ 200 até R$ 250 mil</option>
                                            <option value="275000,00">De R$ 250 até R$ 300 mil</option>
                                            <option value="325000,00">De R$ 300 até R$ 350 mil</option>
                                            <option value="375000,00">De R$ 350 até R$ 400 mil</option>
                                            <option value="425000,00">De R$ 400 até R$ 450 mil</option>
                                            <option value="475000,00">De R$ 450 até R$ 500 mil</option>
                                            <option value="500000,00">Acima de R$ 500 mil</option>
                                        </select>
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <select id="sexo" name="sexo" required>
                                            <option value="">SEXO:</option>
                                            <option value="F">Feminino</option>
                                            <option value="M">Masculino</option>
                                        </select>
                                    </div>
                                    <div class="campo col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <select id="cidadeInteresse" name="cidadeInteresse" required>
                                            <option value="">CIDADE DE INTERESSE:</option>
                                            <option value="AC">AC - Acre</option>
                                            <option value="AL">AL - Alagoas</option>
                                            <option value="AM">AM - Amazonas</option>
                                            <option value="AP">AP - Amapá</option>
                                            <option value="BA">BA - Bahia</option>
                                            <option value="CE">CE - Ceará</option>
                                            <option value="DF">DF - Distrito Federal</option>
                                            <option value="ES">ES - Espírito Santo</option>
                                            <option value="GO">GO - Goiás</option>
                                            <option value="MA">MA - Maranhão</option>
                                            <option value="MG">MG - Minas Gerais</option>
                                            <option value="MS">MS - Mato Grosso Do Sul</option>
                                            <option value="MT">MT - Mato Grosso</option>
                                            <option value="PA">PA - Pará</option>
                                            <option value="PB">PB - Paraíba</option>
                                            <option value="PE">PE - Pernambuco</option>
                                            <option value="PI">PI - Piaui</option>
                                            <option value="PR">PR - Paraná</option>
                                            <option value="RJ">RJ - Rio de Janeiro</option>
                                            <option value="RN">RN - Rio Grande Do Norte</option>
                                            <option value="RO">RO - Rondônia</option>
                                            <option value="RR">RR - Roraima</option>
                                            <option value="RS">RS - Rio Grande Do Sul</option>
                                            <option value="SC">SC - Santa Catarina</option>
                                            <option value="SE">SE - Sergipe</option>
                                            <option value="SP">SP - São Paulo</option>
                                            <option value="To">To - Tocantins</option>
                                        </select>
                                    </div>
                                    <div class="campo col-lg-12">
                                        <input class="btEnviar" name="btEnviar" type="submit" value="ENVIAR">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'inc/footer.php'; ?>
        </div>
    </body> 
</html>

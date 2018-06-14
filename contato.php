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
                            <h2>SUA OPINIÃO É MUITO IMPORTANTE PARA NÓS</h2>
                            <p>
                                O Café do Ponto entende que uma relação de confiança é feita com diálogo. Por isso, temos um canal aberto para ouvir você.<br> 
                                Preencha todos os campos e escreva aqui sua crítica, sugestão ou comentário.
                            </p>

<?php 

  if (!empty($_POST)) {
                                       
$nome         = $_POST['nome'];     
$email        = $_POST['email'];    
$tel          = $_POST['tel'];  
$rua          = $_POST['rua'];  
$num          = $_POST['num'];  
$complemento  = $_POST['complemento'];      
$cep          = $_POST['cep'];  
$bairro       = $_POST['bairro'];   
$estado       = $_POST['estado'];   
$cidade       = $_POST['cidade'];       
$assunto      = $_POST['assunto'];  
$msg          = $_POST['msg'];  
//$to
$copia       = "rsdezoito.emails@gmail.com";
$emailenviar = "contato@cafedoponto.com.br";
$destino     = $emailenviar;

//$subject
$assunto = "Contato Café Do Ponto";

//$message
 $arquivo = "

    <html>

   
 <p><strong>Nome :</strong> $nome</p>
 <p><strong>E-mail :</strong> $email</p>
 <p><strong>Telefone :</strong> $tel</p>
 <p><strong>Rua :</strong> $rua</p>
 <p><strong>Número :</strong> $num</p>
 <p><strong>Complemento :</strong> $complemento</p>
 <p><strong>E-CEP :</strong> $cep</p>
 <p><strong>Bairro :</strong> $bairro</p>
 <p><strong>Estado :</strong> $estado</p>
 <p><strong>Cidade :</strong> $cidade</p>
 <p><strong>Assunto :</strong> $assunto</p>
 <p><strong>Mensagem :</strong> $msg</p>

     
<br />



    </html>
    ";
         
// É necessário indicar que o formato do e-mail é html 
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: $nome\r\n";
    $headers .= "Bcc: $copia\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
       

 
        if($enviaremail){
  /*
$alerta   = "
<div class='alert alert-success' role='alert' id='success_message'>Parab&eacute;ns! 
  <i class='glyphicon glyphicon-thumbs-up'></i> Obrigado por nos contactar, retornaremos o mais breve poss&iacute;vel.
</div>
";  */

//header("Location: contato-sucesso.php");

echo "<script>window.location='contato-sucesso.php';alert('$nome, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";


            
          } else {
            echo "ERRO AO ENVIAR MENSAGEM";
        }

}

?>

                            
                            <form name="formContato" id="formContato" method="post" action="">
                                <div class="row">
                                    <div class="campo col-lg-12">
                                        <input class="ipt" name="nome" id="nome" type="text" placeholder="NOME:" required>
                                    </div>
                                    <div class="campo col-lg-12">
                                        <input class="ipt" name="email" id="email" type="email" placeholder="E-MAIL:" required>
                                    </div>
                                    <div class="campo col-lg-12">
                                        <input class="ipt cel" name="tel" id="telefone" type="text" placeholder="TELEFONE:" required>
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input class="ipt" name="rua" id="endereco" type="text" placeholder="ENDEREÇO:" required>
                                    </div>
                                    <div class="campo col-lg-2 col-md-2 col-sm-2 col-xs-5">
                                        <input class="ipt" name="num" id="numero" type="text" placeholder="Nº" required>
                                    </div>
                                    <div class="campo col-lg-4 col-md-4 col-sm-4 col-xs-7">
                                        <input class="ipt" name="complemento" id="complemento" type="text" placeholder="COMPLEMENTO:">
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input class="ipt cep" name="cep" id="cep" type="text" placeholder="CEP:" required>
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input class="ipt" name="bairro" id="bairo" type="text" placeholder="BAIRRO:" required>
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input class="ipt" name="estado" id="estado" type="text" placeholder="ESTADO:" required>
                                    </div>
                                    <div class="campo col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input class="ipt" name="cidade" id="cidade" type="text" placeholder="CIDADE:" required>
                                    </div>
                                    <div class="campo col-lg-12">
                                        <input class="ipt" name="assunto" id="assunto" type="text" placeholder="ASSUNTO:" required>
                                    </div>
                                    <div class="campo col-lg-12">
                                        <textarea name="msg" id="mensagem" placeholder="MENSAGEM:"></textarea>
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

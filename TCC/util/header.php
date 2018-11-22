<?php require_once 'config.php';?>
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('database/fazlogin.php');
    }?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name='author' content='Deonir Bampi Junior'> 

      <title>Cão Guia</title>
     <!--  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
      <link rel="shortcut icon" type="image/x-icon" href="http://www.camboriu.ifc.edu.br/wp-content/themes/ifc/ico/favicon.png">
     
      <link href="<?php echo(constant("BASE_URL")); ?>css/bootstrap.min.css" rel="stylesheet" media="all">
      <link href="<?php echo(constant("BASE_URL")); ?>css/font-awesome.min.css" rel="stylesheet" media="all">
      <link href="<?php echo(constant("BASE_URL")); ?>css/estilo.css" rel="stylesheet" media="all">
      <link href="<?php echo(constant("BASE_URL")); ?>css/estilo.min.css" rel="stylesheet" media="all">
      <link href="<?php echo(constant("BASE_URL")); ?>css/contrast.css" rel="stylesheet" media="all">
      
    

    </head>
    <body>
      <div class="cabecalho-ifc">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div>
                <img src="img/logo-ifc-cam-letras-brancas.png" class="img-responsive" alt="Logotipo Intituto Federal Catarinense" title="Logotipo Intituto Federal Catarinense">
              </div>
            </div>

            <!-- <ul>
              <li><a href="#altocontraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">🔅</a></li>
            </ul> -->

           <!--  <div>
              <a href="#altocontraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">🔅</a>
            </div> -->

            <div>

              <a href="🔅"  class="blindIcon bt-low-brightness" tabindex="1">🔅</a>
              
              <a href="A+"  class="blindIcon bt-increase-font-size" tabindex="2"><strong style="font-size: 1.3em !important">A</strong></a>
              <a href="A0"  class="blindIcon bt-normal-font-size" tabindex="3"><strong ">A</strong></a>
              <a href="A-"  class="blindIcon bt-decrease-font-size" tabindex="4"><strong style="font-size: 0.7em !important">A</strong></a>

            </div>
          </div>
        </div>
      </div>
<?php 
if(isset ($_SESSION['login']) ){

}else{
    require('login.php');
  require('footer.php');
  die();
}

 
<?php require_once 'util/header.php'; ?>

<div class='container bg-section well form-horizontal'>
    <div class='row hidden-print'>
        <div class="col-xs-6">
             <h4>
                <?php echo "Bem Vindo ".$_SESSION['login']."!!!"; ?>
             </h4>
        </div> 
        <div class='col-xs-6'>
            <a href='index.php' class='btn btn-primary btn-sair pull-right' role='button'><span class='glyphicon glyphicon-share-alt'> <strong>Voltar</strong></span></a>
        </div>
    </div>
    <div class='row hidden-print'>
        <div class='col-xs-12'>
            <div class='page-header'>
                <h1>Atualizar Perfil</h1>
            </div>
        </div>
    </div>

    <!-- <form class="well form-horizontal" action="Cadastro.php " method="post"  id="contact_form"> -->
      
   

      <div class="form-group">
        <label class="col-md-4 control-label">Nome</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="perfilnome" placeholder="Nome" class="form-control"  type="text" autofocus>
              </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">CPF</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
              <input  name="perfilcpf" placeholder="000.000.000-00" class="form-control"  type="text">
            </div>
          </div>
      </div>

      <div class="form-group">
      <label class="col-md-4 control-label">E-mail</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name="perfilemail" placeholder="Exemplo@email.com" class="form-control"  type="text">
          </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label">Senha Atual</label>  
       <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input name="perfilsenhaAtual" placeholder="Senha Atual" class="form-control" type="password">
          </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Nova Senha</label>  
       <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input name="perfilsenhanova" placeholder="Nova Senha" class="form-control" type="password">
          </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label">Digite Novamente a Senha</label>  
       <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input name="perfilsenhanova" placeholder="Nova Senha'" class="form-control" type="password">
          </div>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" class="btn btn-primary" >Enviar <span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>


</div>

<?php require_once 'util/footer.php'; ?> 
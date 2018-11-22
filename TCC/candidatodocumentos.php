<?php require_once 'util/header.php';?>
<div class='container bg-section well form-horizontal'>
    <div class='row hidden-print'>
        <div class="col-xs-6" tabindex="6">
             <h3><strong>Dicas de Navegação</strong></h3>
           <p>
              Para navegar neste site utilize as teclas:<br>
                TAB: Próximo campo.<br>
                SHIFT e TAB: Campo anterior.<br>
                SHIFT e + (Mais): Aumenta o tamanho da fonte.<br> 
                SHIFT e - (Menos):Diminue o tamanho da fonte.<br>
                SHIFT e 0 : Tamanho original da fonte.<br>
                SHIFT e ESC: Habilita e desabilita alto contraste.<br> 
           </p>
        </div> 
        <div class='col-xs-6'>
            <a href='candidatoinicial.php' class='btn btn-primary btn-sair pull-right' role='button' tabindex="5"><span class='glyphicon glyphicon-share-alt'> <strong>Voltar</strong></span></a>
        </div>
    </div>
    <div class='row hidden-print'>
        <div class='col-xs-12'>
            <div class='page-header'>
                <h1 tabindex="7">Envio de Documentos</h1>
            </div>
        </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" tabindex="">Copia da Carteira de Identidade</label>  
      <div class="col-md-4 inputGroupContainer">
        <span class='btn btn-primary btn-upload'>
          <span >Selecione um arquivo</span>
          <input type='file' name='arquivoUpload' id='arquivoUpload'>
        </span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" tabindex="">Cópia do CPF</label>  
      <div class="col-md-4 inputGroupContainer">
        <span class='btn btn-primary btn-upload'>
          <span >Selecione um arquivo</span>
          <input type='file' name='arquivoUpload' id='arquivoUpload'>
        </span>
      </div>
    </div>
     <div class="form-group">
      <label class="col-md-4 control-label" tabindex="">Identificação do candidato (anexo 1)</label>  
      <div class="col-md-4 inputGroupContainer">
        <span class='btn btn-primary btn-upload'>
          <span >Selecione um arquivo</span>
          <input type='file' name='arquivoUpload' id='arquivoUpload'>
        </span>
      </div>
    </div>
     <div class="form-group">
      <label class="col-md-4 control-label" tabindex="">Termo de Responsabilidade (Anexo 2)</label>  
      <div class="col-md-4 inputGroupContainer">
        <span class='btn btn-primary btn-upload'>
          <span >Selecione um arquivo</span>
          <input type='file' name='arquivoUpload' id='arquivoUpload'>
        </span>
      </div>
    </div>
     <div class="form-group">
      <label class="col-md-4 control-label" tabindex="">Comprovante de Residencia</label>  
      <div class="col-md-4 inputGroupContainer">
        <span class='btn btn-primary btn-upload'>
          <span >Selecione um arquivo</span>
          <input type='file' name='arquivoUpload' id='arquivoUpload'>
        </span>
      </div>
    </div>
     <div class="form-group">
      <label class="col-md-4 control-label" tabindex="">Atestado de Saude</label>  
      <div class="col-md-4 inputGroupContainer">
        <span class='btn btn-primary btn-upload'>
          <span >Selecione um arquivo</span>
          <input type='file' name='arquivoUpload' id='arquivoUpload'>
        </span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" tabindex="">Laudo Medico</label>  
      <div class="col-md-4 inputGroupContainer">
        <span class='btn btn-primary btn-upload'>
          <span >Selecione um arquivo</span>
          <input type='file' name='arquivoUpload' id='arquivoUpload'>
        </span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" tabindex="">Comprovação que possui Orientação e Mobilidade</label>  
      <div class="col-md-4 inputGroupContainer">
        <span class='btn btn-primary btn-upload'>
          <span>Selecione um arquivo</span>
          <input type='file' name='arquivoUpload' id='arquivoUpload'>
        </span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" tabindex="" >Senha</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  name="candidatosenha" placeholder="Digite sua senha" class="form-control"  type="text" tabindex="4">
            </div>
        </div>
    </div>




    
  <div class="form-group">
      <label class="col-md-4 control-label" tabindex=""></label>
      <div class="col-md-4">
        <button type="submit" class="btn btn-primary" >Enviar <span class="glyphicon glyphicon-send"></span></button>
      </div>
    </div>




</div>  
<?php require_once 'util/footer.php'; ?> 
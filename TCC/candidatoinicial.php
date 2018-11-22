<?php require_once 'util/header.php'; ?>
<div class="container bg-section">
    <div class="row">
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
        <div class="col-xs-6">
            <div class="btn-sair pull-right" > 
                <a href="logout.php" class="btn btn-warning" tabindex="5"><span class="glyphicon glyphicon-log-out"></span> 
                    <strong>Sair</strong>
                </a>
            </div>
        </div>
    </div>
    <div class='row'>
        
    </div>

    <div class='row'>
        <div class='col-xs-12'>
            <div class='page-header'>
                <h1 tabindex="7">Pagina Inicial</h1>
            </div>
        </div>
    </div>

    <div class=row>
        <div class='col-xs-6 col-sm-3 col-md-2'>
            <a id='btn-telaformulario' href='telaformulario.php'tabindex="8">
                <div class='panel panel-primary'>
                    <div class='panel-heading text-center'>
                        <i class='fa fa-file-text fa-5x'></i>
                    </div>
                    <div class='panel-footer text-center'>
                        <div>Formulario</div>
                        <div><i class='fa fa-arrow-circle-down'></i></div>
                        <div class='clearfix'></div>
                    </div>
                </div>
            </a> 
        </div>
        <div class='col-xs-6 col-sm-3 col-md-2' >
            <a id='btn-teladocumentos' href='candidatodocumentos.php'tabindex="9">
                <div class='panel panel-green'>
                    <div class='panel-heading text-center'>
                        <i class='fa fa-check-square-o fa-5x'></i>
                    </div>
                    <div class='panel-footer text-center'>
                        <div>Enviar Documentos</div>
                        <div><i class='fa fa-arrow-circle-down'></i></div>
                        <div class='clearfix'></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- <div class="container bg-section">
<div class='row' style="text-align: center">
        <h1 ><strong>Etapas do Processo de Formação dos Cães Guia</strong></h1><br><br>
        <h4>A primeira etapa inicia-se após o nascimento dos filhotes,<br> 
            onde é realizada uma seleção genética e comportamental. <br>
            Após dois meses, os filhotes selecionados são avaliados e iniciam a fase de socialização, <br>
            na qual os cães aprendem a viver em ambiente social e devem ser expostos a <br>
            situações do cotidiano,como ir para o banco, shopping, pegar ônibus etc. <br> 
            Essa etapa é conduzida por uma família voluntária que é responsável por realizar tais atividades.
            <br> Os cães permanecem aos cuidados dessas famílias durante um período de 15 meses</h4>
</div> -->
<?php require_once 'util/footer.php'; ?> 
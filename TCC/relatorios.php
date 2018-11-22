
<?php require_once 'util/header.php'; ?>

<div class='container bg-section'>
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
                <h1>Painel de Relatórios</h1>
            </div>
        </div>
    </div>
    <div class='row hidden-print'>
        <div class='col-sm-3'>
            <form id='buscarcandidato' class='form-group' action=' ' method='POST' enctype='multipart/form-data'>
                <label  for='buscarcandidatoRegiao'>Buscar por Região</label>
                <div class='input-group'>
                    <select  id='buscarcandidatoRegiao' name='buscarcandidatoRegiao' class='form-control'>
                        <option value="">Selecione a Região</option>
                        <option value="PR">Paraná - PR</option>
                        <option value="RS">Rio Grande do Sul - RS</option>
                        <option value="SC">Santa Catarina - SC</option>
                    </select>
                    <span class='input-group-btn'>
                        <button type='submit' name='enviardados' class='btn btn-primary'>
                            <span class='glyphicon glyphicon-search'></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class='col-sm-2'>
            <form id='buscarcandidatos' class='form-group' action='' method='POST' enctype='multipart/form-data'>
                <label for='relatoriocand'>Busca por Data</label>
                <div class='input-group'>
                    <input type='date' id='relatoriocand' name='relatoriocand' class='form-control' placeholder='dd/mm/aaaa' maxlength='10' pattern='[0-9]{2}\/[0-9]{2}\/[0-9]{4}$'>
                    <span class='input-group-btn'>
                        <button type='submit' name='enviardados' class='btn btn-primary'>
                            <span class='glyphicon glyphicon-search'></span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
        <div class='col-sm-3 col-md-5'>
            <div class='pull-right'>
                <button id='atualizarcandidato' class='btn btn-primary'>
                    <span class='glyphicon glyphicon-refresh'></span>
                </button>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm-12 tbl-relatorio'>
            <div class='panel panel-default'>
                <div class='table-responsive'>
                    <table class='table table-striped text-center'>
                        <tr>
                            <th class='text-center'><strong>Data de Cadastro</strong></th>
                            <th class='text-center'><strong>Nome</strong></th>
                            <th class='text-center'><strong>Local</strong></th>
                            <th class='text-center'><strong>Status</strong></th>  <!-- Selecionado /Espera -->
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class='modal fade' id='modal-relatorio' role='dialog' tabindex='-1' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    <span class='sr-only'>Fechar Janela Modal</span>
                </button>
                <h4 class='modal-title'></h4>
            </div>
            <div class='modal-body'>
                <h5 id='modal-mensagem'></h5>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-primary' data-dismiss='modal'>Fechar</button>
            </div>
        </div>
    </div>
</div>
 -->    
<?php require_once 'util/footer.php'; ?>
<?php require_once 'util/header.php'; ?>
<div class="container bg-section">
    <div class="row">
        <div class="col-xs-6">
           <h4>
            <?php echo "Bem Vindo ".$_SESSION['login']."!!!"; ?>
            </h4>
        </div> 
        <div class="col-xs-6">
            <div class="btn-sair pull-right">
                <a href="logout.php" class="btn btn-warning"><span class="glyphicon glyphicon-log-out"></span> 
                    <strong>Sair</strong>
                </a>
            </div>
        </div>
    </div>

    <div class='row'>
        <div class='col-xs-12'>
            <div class='page-header'>
                <h1>Painel de Controle</h1>
            </div>
        </div>
    </div>

    <div class=row>

        <div class='col-xs-6 col-sm-3 col-md-2'>
            <a id='btn-telaperfil' href='telaPerfil.php'>
                <div class='panel panel-primary'>
                    <div class='panel-heading text-center'>
                        <i class='fa fa-user fa-5x'></i>
                    </div>
                    <div class='panel-footer text-center'>
                        <div>Perfil</div>
                        <div><i class='fa fa-arrow-circle-down'></i></div>
                        <div class='clearfix'></div>
                    </div>
                </div>
                </a>
        </div>


        <div class='col-xs-6 col-sm-3 col-md-2'>
            <a id='btn-telausuarios' href='telausuarios.php'>
                <div class='panel panel-green'>
                    <div class='panel-heading text-center'>
                        <i class='fa fa-users fa-5x'></i>
                    </div>
                    <div class='panel-footer text-center'>
                        <div>Usuários</div>
                        <div><i class='fa fa-arrow-circle-down'></i></div>
                        <div class='clearfix'></div>
                    </div>
                </div>
            </a>
        </div>

        <div class='col-xs-6 col-sm-3 col-md-2'>
            <a id='btn-telacandidatos' href='telacandidatos.php'>   <!-- cbolsistas ->Candidatos -->
                <div class='panel panel-primary'>
                    <div class='panel-heading text-center'>
                        <i class='fa fa-pencil-square-o fa-5x'></i>
                    </div>
                    <div class='panel-footer text-center'>
                        <div>Candidatos</div>
                        <div><i class='fa fa-arrow-circle-down'></i></div>
                        <div class='clearfix'></div>
                    </div>
                </div>
            </a>
        </div>

        <div class='col-xs-6 col-sm-3 col-md-2'>
            <a id='btn-telarelatorios' href='relatorios.php'>   <!-- Redireciona Nova Tela para relatorios --> 
                <div class='panel panel-yellow'>
                    <div class='panel-heading text-center'>
                        <i class='fa fa-file-text fa-5x'></i>
                    </div>
                    <div class='panel-footer text-center'>
                        <div>Relatórios</div>
                        <div><i class='fa fa-arrow-circle-down'></i></div>
                        <div class='clearfix'></div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>


<?php require_once 'util/footer.php'; ?> 
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

    <div class='row'>
        <div class='col-xs-12'>
            <div class='page-header'>
                <h1>Lista de Usuários</h1>
            </div>
        </div>
    </div>
    <div class=row>
        <div class='col-sm-8 col-md-9'>
            <div class='c-lista'>
                <div class='pull-right'>
                    <button id='atualizarusuario' class='btn btn-primary'>
                        <span class='glyphicon glyphicon-refresh'></span>
                    </button>
                </div>                    
            </div>
            <div class='tbl-usuarios'>
                <div class='panel panel-default'>
                    <div class='table-responsive'>
                        <table class='table table-striped text-center'>
                            <tr>
                                <th class='text-center'><strong>Nivel de Acesso</strong></th> 
                                <th class='text-center'><strong>Nome</strong></th>
                                <th class='text-center'><strong>Ações</strong></th>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!--  -->
        <div id='usuario' class='col-sm-4 col-md-3'>      
            <div class='panel panel-primary'>
                <div class='panel-heading text-center'><strong>Cadastrar Usuário</strong></div>
                <div class='panel-body'>
                    <form id='formusuario' action='usuario.php' method='POST'>
                        <div class='form-group'>
                            <label for='usuarionome'>Nome</label>
                            <input type='text' id='usuarionome' name='usuarionome' class='form-control' placeholder='Nome' required>
                        </div>
                        <div class='form-group'>
                            <label for='usuariocodigo'>CPF</label>
                            <input type='text' id='usuariocodigo' name='usuariocodigo' class='form-control' placeholder='Didite seu CPF' maxlength='10' required>
                        </div>
                        <div class='form-group'>
                            <label for='usuarioemail'>E-mail</label>
                            <input type='password' id='usuaroemail' name='usuarioemail' class='form-control' placeholder='E-mail' required>
                        </div>
                        <div class='form-group'>
                            <label for="usuarioacesso">Nivel de Acesso</label><br>
                            <label class='radio-inline'>
                                <input type='radio' name='usuariotipo' id='usuariotipo1' value='1' checked>
                                Administrador.
                            </label><br>
                            <label class='radio-inline'>
                                <input type='radio' name='usuariotipo' id='usuariotipo2' value='2'>
                                Treinador / Instrutor.
                            </label>
                        </div>
                        <div class='form-group'>
                            <label for='usuariosenha'>Senha</label>
                            <input type='password' id='usuariosenha' name='usuariosenha' class='form-control' placeholder='Senha' required>
                        </div>
                        <div class='form-group'>
                            <label for='usuariorepsenha'>Digite Novamente a Senha</label>
                            <input type='password' id='usuariorepsenha' name='usuariorepsenha' class='form-control' placeholder='Digite Novamente a Senha' required>
                        </div>
                        <!-- <span>Tamanho Max. 2MB</span>
                        <div class='form-group'>
                            <span class='btn btn-primary btn-upload'>
                                <span>Selecione uma Foto</span>
                                <input type='file' name='arquivoUpload' id='arquivoUpload'>
                            </span>
                        </div> -->
<!--                         <?php if ( $_SESSION['tipo'] == 1 ) { ?>
                            <div class='form-group'>
                                <label for='usuariotipo'>Tipo de Acesso</label>
                                <select id='usuariotipo' name='usuariotipo' class='form-control' required>
                                </select>
                            </div>
                        <?php }?> -->
                        <input type='hidden' id='idusuario' name='idusuario'>
                        <input type='hidden' id='usuariodataatual' name='usuariodataatual'>
                        <div class='form-group'>
                            <button type='submit' name='enviardados' class='btn btn-primary btn-block'><span class='glyphicon glyphicon-ok'> Cadastrar</span></button>
                        </div>
                    </form>
                    <div class='aguarde text-center'></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'util/footer.php'; ?> 
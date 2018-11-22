<?php require_once 'util/header.php'; ?>
<div class='container bg-section'>
    <div class='row'>
        <div id='telalogin' class='col-xs-12'>
            <div class='form-login'>
                <h4 class='text-center'>Cão Guia IFC- Camboriú</h4>
               <?php
                    
                    $msg_erro = isset( $_SESSION['msg_erro'] ) ? $_SESSION['msg_erro'] : NULL;
                    if ( $msg_erro ) {
                        unset( $_SESSION['msg_erro'] );
                        echo "<div class='alert alert-danger' role='alert'>".$msg_erro."</div>";
                    }
                ?> 
                <form action='index.php' method='POST'>
                    <div class='form-group'>
                        <label for='login' class='sr-only'>Usuário</label>
                        <input type='text' id='login' name='login' class='form-control input-lg' placeholder='Usuário' autocomplete="off" required>
                    </div>
                    <div class='form-group'>
                        <label for='senha' class='sr-only'>Senha</label>
                        <input type='password' id='senha' name='senha' class='form-control input-lg' placeholder='Senha' required >
                    </div>
                    <div class='form-group'>
                        <button type='submit' name='acessar' class='btn btn-primary btn-lg btn-block'><span class='glyphicon glyphicon-log-in'> Acessar</span></button>
                    </div>
                    <div class="form-group">
                         <a>Esqueceu a senha?</a> <!-- Tela modal para isenrir algun dado ... para rec senha -->
                    </div>
                    <div class="form-group">
                         <a>Cadastro</a> <!-- Tela modal para isenrir algun dado ... para rec senha -->
                    </div>
               
                </form>
            </div>
            <div class='panel-foot'>
            <a href="http://www.camboriu.ifc.edu.br/pos-graduacao/treinador-e-instrutor-de-caes-guia/">
                <img src='img/indice.png' class='img-rounded img-responsive center-block' alt="Banner Centro de Formação de Treinadores e Instrutores de Cães-guia" title="Banner do Centro de Formação de Treinadores e Instrutores de Cães-guia">
            </a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'util/footer.php'; ?>
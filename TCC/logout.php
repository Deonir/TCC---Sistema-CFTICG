<?php
	
   include('util/header.php'); 


// Destroy the session:
$_SESSION = array(); // Destroy the variables.
session_destroy(); // Destroy the session itself.
setcookie (session_name(), '', time()-300); // Destroy the cookie.

echo '<div class="alert alert-info" role="alert"> <strong>Deslogado!</strong> volte para a <a href="'.constant('BASE_URL').'">pagina inicial para logar novamente</a>. </div>';

// Include the HTML footer:
include ('util/footer.php');
?>

<style type="text/css">
	.sidebar { display: none!important; }
</style>


   <?php
$conn = mysqli_connect('localhost', 'root', '', 'admin');

$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "select login from usuario where login = '$login' AND senha = '$senha'";

$resultado = mysqli_query($conn,$sql);
$row = mysqli_num_rows($resultado);
	
if($row >= 1)
{	
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
}else{
	unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    $_SESSION['msg_erro'] = 'Login ou senha inválidos!!!';

}

    
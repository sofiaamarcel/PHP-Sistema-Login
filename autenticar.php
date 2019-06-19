<?php
session_start();

//Pegando o usuário e senha digitados.
$usuario_digitado = $_REQUEST['usuario'];
$senha_digitada = $_REQUEST['senha'];

//Definindo quais são os usuários e senhas corretos.
$usuario = "aluno";
$senha = "123";

//Comparando o certo com o digitado.
if ( $usuario_digitado == $usuario && $senha_digitada == $senha ) {

      //caso o usuário e a senha estiverem corretos, há o redirecionamento
      //para a página "protegido.php".
    $_SESSION['autenticado'] = true;
    header("Location: protegido.php");

} else {
    //caso o usuário ou a senha digitados estejam, qualquer um dos
    //dois incorretos, ele é redirecionamento para a pagina de login
    //novamente. Também será exibida uma mensagem de usuário e senha
    //inválidos
    header("Location: form_login.php?erro=1");
}
?>
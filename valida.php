<?php
//sempre antes de tudo iniciar o ssession_start, sempre antes de tudo quando for emitir uma saida
//deve ficar antes de qualquer output de dados

//inicio sessao
    session_start();




//variavel que verifica se a autenticacao foi realizado

$usuario_autenticado = false;

//usuario do sistema
$usuario_app = array(
    array('email'=> 'geronimo@gmail.com','senha'=> '12345678'),
    array('email'=> 'gg@gmail.com','senha'=>'12345'),
);


foreach($usuario_app as $user){

    if($user['email'] == $_POST['email'] && $user['senha'] ==$_POST['senha'] )
    $usuario_autenticado = true;
}

if($usuario_autenticado){
    header('Location:home.php');
    $_SESSION['autenticado'] = 'SIM';
}else{
    $_SESSION['autenticado']='NAO';
    //funciona com um desvio, forçando o redirecionamento para onde quisermos
   //header('Location: index.php');
   // apos o'?'podemos exibir um parametro, como por exemplo > login=erro
   $_SESSION['autenticado']='NAO';
   header('Location: index.php?login=erro');
}

// echo '<pre>';
// print_r($usuario_app);
// echo '</pre>';

// print_r($_POST);



//  echo $email;
//  echo $senha;

?>
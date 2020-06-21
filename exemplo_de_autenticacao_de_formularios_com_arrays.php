<?php
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
    echo 'usuario autenticado';
}else{
    echo 'erro na autenticação do usuario';
}

//o metodo isset serve para verificar a existencia de uma variavel ou metodo dentro do array
if(isset($_GET['login']) && $_GET['login']=='erro'){


// echo '<pre>';
// print_r($usuario_app);
// echo '</pre>';

// print_r($_POST);



//  echo $email;
//  echo $senha;

?>
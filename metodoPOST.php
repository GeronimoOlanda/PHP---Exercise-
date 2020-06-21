<?php

$usuario_app = array(
    array('email'=> 'geronimo@gmail.com','senha'=> '12345678'),
    array('email'=> 'gg@gmail.com','senha'=>'12345'),
);

echo '<pre>';
print_r($usuario_app);
echo '</pre>';

print_r($_POST);

 $email = $_POST['email'];
 $senha = $_POST['senha'];

 echo $email;
 echo $senha;
?>
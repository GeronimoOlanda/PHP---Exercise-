<?php
//abre um arquivo queremos, e as segunda aspas é o parametro que queremos
$arquivo = fopen('arquivo.hd','a');

//estamos trabalhando montagem do texto
$titulo = str_replace('#','-',$_POST['titulo']);
$categoria= str_replace('#','-',$_POST['categoria']);
$descricao= str_replace('#','-',$_POST['descricao']);

$texto = $titulo.'#'.$categoria.'#'.$descricao.'#'.$descricao;
//abrindo o arquivo
fwrite($arquivo, $texto);

//fechando o arquivo
fclose($arquivo);
echo $texto;
?>
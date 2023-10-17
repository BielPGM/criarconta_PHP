<?php 
$servidor="127.0.0.1";
$usuario="root";
$senha="usbw";
$banco="adsva4_ps_21";
mysql_connect($servidor, $usuario, $senha) or die ('Erro ao conectar com o servidor');
mysql_select_db($banco) or die ('Erro ao conectar com o Banco de Dados');
echo 'Banco de Dados conectado com Sucesso';
?>

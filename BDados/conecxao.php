<?php


$utf8 = header("content-Type: text/html; charset=utf-8");
$link = new mysqli('localhost','root','','dados'); // nome do servidor // nome de usuario // senha // nome do banco.
$link->set_charset('utf8'); // para nao dar erro nas consultas

?>
<?php
session_start();
include_once 'conecxao.php';
$id = 1;
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST,'sobrenome',FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
$mensagem = filter_input(INPUT_POST,'mensagem',FILTER_SANITIZE_SPECIAL_CHARS);

$queryInsert = $link->query("insert into contato(nome,sobrenome,email,mensagem) values('$nome','$sobrenome','$email','$mensagem')");
	
	$affected_rows = mysqli_affected_rows($link);
	if($affected_rows >0):
		$_SESSION['msgcadastro']="<div class=' alert alert-success'>
		<strong>Concluido!</strong> Mensagem enviado com sucesso! Em breve retornaremos o seu Contato! </a>
		</div>";
		
		header("Location: ../contato.php"); //retorna ao index

endif
?>
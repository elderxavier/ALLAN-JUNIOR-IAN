<?php
	//Configurando seus dados
	$mail = "contato@restaurantefogaonativo.com.br"; //Aqui troque para o seu e-mail de contato.	
	//------------


	$nome = utf8_decode(@$_POST['nome']);
	$email = utf8_decode(@$_POST['email']);
	$mensagem = utf8_decode(@$_POST['mensagem']);	

	$remetente="$nome : $email";
	
	$headers = "Content-Type: text/html; charset=iso-8859-1\n";
	
	$headers.="From: $remetente\n";
	
	$message="<font face=Verdana size=2>Nome:$nome<br>Email:$email<br>Mensagem:$mensagem</font>";
	
	mail("$mail","$assunto","$message","$headers"); // Enviando o email.
	
	echo "&resposta=ok&";
?>

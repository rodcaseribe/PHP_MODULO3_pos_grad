<?php
	require '/var/www/html/email/PHPMailer/PHPMailer-master/PHPMailerAutoload.php';
	
	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'tls';
	
	//nome do servidor
	$Mailer->Host = 'smtp.gmail.com';
	//Porta de saida de e-mail 
	$Mailer->Port = 587;
	
	//Dados do e-mail de saida - autenticação
	$Mailer->Username = 'servidorenvio2015@gmail.com';
	$Mailer->Password = 'MINHASENHA';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = 'servidorenvio2015@gmail.com';
	
	//Nome do Remetente
	$Mailer->FromName = 'UNICEP - Centro Computacional';
	
	//Assunto da mensagem
	$Mailer->Subject = 'Pagamento Servidores - LOCAWEB';
	
	//Corpo da Mensagem
	$Mailer->Body = '<body>Fatura com vencimento padr&atilde;o em 20 dia desse M&ecirc;s.<br><br>Verificar com Urg&ecirc;ncia no endere&ccedil;o <a href=http://www.locaweb.com.br>LINK LOCAWEB</a><br><h4 style=color:red;>Verficar com setor financeiro</h4><b>Rodolfo C.R </b>- Adm de Redes<br>Tel: 3362-2111 : <b>Ramal</b>2113<br><h4 style=color:#0040ff;>Obs: N&atilde;o responder esse e-mail: Rob&ocirc; Kerberos</h4></body>';
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = '<h1>LOCAWEB</h1>';
	
	//Destinatario 
	$Mailer->AddAddress('rcasemiro@unicep.com.br');
	
	if($Mailer->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	
?>




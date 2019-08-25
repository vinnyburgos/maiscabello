<?php

require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/class.smtp.php"); 

$msg = ' ';
if (array_key_exists('userfile', $_FILES)) {

	// RECEBER DADOS DO CONTATO
    $userfile = $_FILES['userfile'];
	$nome = $_POST['nome'];
	$email = $_POST['email']; // Email que será respondido
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	// RECEBER DADOS DO CONTATO


	// DISPARO PARA O EMAIL DO SERVIDOR
    $mail = new PHPMailer;
    $mail->setFrom('disparocontato@job.krush.com.br', 'Mais Cabello');
    $mail->addAddress('maiscabello@gmail.com','vinicius.burgos@agenciamacro.com.br');
    $mail->Subject = 'Contato do Site';
    $mail->Body = "
		Formulário de contato do site

		Nome: $nome
		Email: $email
		Telefone: $telefone
		Mensagem: $mensagem
    ";
    // DISPARO PARA O EMAIL DO SERVIDOR


    // DISPARAR VARIOS ARQUIVOS AO MESMO TEMPO
    for ($ct = 0; $ct < count($_FILES['userfile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'][$ct]));
        $filename = $_FILES['userfile']['name'][$ct];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    // DISPARAR VARIOS ARQUIVOS AO MESMO TEMPO

    $mail->send();

    // DISPARO DE VOLTA PARA O CLIENTE
    $mail = new PHPMailer;
    $mail->setFrom('disparocontato@job.krush.com.br', 'Mais Cabello');
    $mail->addAddress($email);
    $mail->Subject = 'Mais Cabello';
    $mail->Body = "
		
		$nome, obrigado por enviar suas informações.
		Em breve entraremos em contato.

    ";
    // DISPARO DE VOLTA PARA O CLIENTE


    if (!$mail->send()) {
        echo "<br><br><center><b><font color='red'>Ocorreu um erro ao enviar a mensagem!<br>Volte e tente novamente.";
    } else {
        // $msg .= "Message sent!";
        echo "<script>location.href='obrigado.php'</script>";
    }
}
?>
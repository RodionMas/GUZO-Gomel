<?php 

	if($_POST['subject'] == 1){
		$subject = 'Запись на прием';
	}
	elseif($_POST['subject'] == 2){
		$subject = 'По вопросам доступности медицинских услуг';
	}
	elseif($_POST['subject'] == 3){
		$subject = 'обращения и жалобы по вопросам качества услуг';
	} else{
		$subject = 'Запись на прием';
	}
	$to = "rrssrssrrr1997@bk.ru";
	$from = trim($_POST['email']);

	$messagetext = htmlspecialchars($_POST['messagetext']);
	$messagetext = urldecode($messagetext);
	$messagetext = trim($messagetext);

	$headers = "From: $from" . "\r\n" .
	"Reply-To: $from" . "\r\n" . 
	"X-Mailer: PHP/" . phpversion();

	if(mail($to, $subject, $messagetext, $headers)){
		echo "письмо отправлено";
	} else {
		echo "письмо не отправлено";
	}

?>
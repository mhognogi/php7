<?php

$dirmailer = '/../../../../assets/PHPMailer';

if (!class_exists('phpmailer'))
include_once (__DIR__.$dirmailer.'/class.phpmailer.php');

class Mailer {
	public static function set() {
		$mh = new PHPMailer();	
		$mh->CharSet = 'UTF-8';
		$mh->IsHTML(true);	
		$mh->DKIM_domain = 'xxx.ro';
		$mh->DKIM_private = __DIR__.$dirmailer.'/keys/.htkeyprivate';
		$mh->DKIM_selector = 'phpmailer';
		$mh->DKIM_passphrase = '';
		return $mh;
	}
}

//start
$mh = Mailer::set();
$mh->SetFrom('noreply@xxx.ro', 'Liamed Romania');
$mh->Subject = 'Demo phpmailer - impresiile tale - '. strtotime('now');
$mh->AddAddress('xx1@xxx.com','qq'); //recipient 2
$mh->addCC("xx@xxx.ro");

//Address to which recipient will reply
// $mh->addReplyTo("reply@yourdomain.com", "Reply");
// $mh->addCC("cc@example.com");
// $mh->addBCC("bcc@example.com");
// $mh->addAttachment('/pathto/file', 'new_name.zip');  // optional name

$mh->MsgHTML('Teste mesaje de la Phpmailer '. strtotime('now') );
$mh->Send();
unset($mh); // important mai ales daca exista un loop gen foreach  !!!!

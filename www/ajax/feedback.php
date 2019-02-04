<?
$name = HTML_SPECIALCHARS($_POST['name']);
$email = HTML_SPECIALCHARS($_POST['email']);
$subject = HTML_SPECIALCHARS($_POST['subject']);
$message = HTML_SPECIALCHARS($_POST['message']);
if ($name == '' || $email == '' || $subject == '' || $message == ''){
	echo 'Заполните все поля';
	exit;
}
// отправка сообщения
$subject = "=?utf-8?B?".base64_encode(subject)."?=";
$headers = "Form: $email\r\nReply-to: $email\r\nContect-type: text/html;charset= utf-8r\n;
if(mail"test@mail.ru" , $subject, $message, $headers)
echo "Сообщение отправлено";
else
 echo "Сообщение не отправлено"
?>
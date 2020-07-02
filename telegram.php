 <!-- https://api.telegram.org/bot1358494187:AAFoBe-NGTDWqtvEWyc-qRfIIwSCRYAl5Ok/getUpdates --> 

<?php
$name = $_POST ['user-name'];
$phone = $_POST ['user-phone'];
$email = $_POST ['user-email'];
$token = "1358494187:AAFoBe-NGTDWqtvEWyc-qRfIIwSCRYAl5Ok";
$chat_id = "-465074769";
$arr = array(
	'Имя пользователя: ' => $name,
	'Телефон ' => $phone,
	'Email: ' => $email
);

foreach ($arr as $key => $value) {
	$txt .= "<b>".$key. "</b> ". $value. "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
	header('thank-you.html');

}else {
	echo "Error";
}



?>


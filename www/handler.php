<?php
include_once '../app/Validation.php';

$validation = new Validation();

if (isset($_POST['fio'])) {
	$errorFio = null;
	$fio = $_POST['fio'];
	$errorFio = $validation->checkForEmptyValue($fio, $errorFio, 'Имя');
	$errorFio = $validation->checkTooLongLength ($fio, $errorFio, '100', 'Имя');
	$fio = $validation->clean($fio);
}

if (isset($_POST['email'])) {
	$errorEmail = null;
	$email = $_POST['email'];
	$errorEmail = $validation->checkForEmptyValue($email, $errorEmail, 'E-mail');
	$errorEmail = $validation->checkTooLongLength ($email, $errorEmail, '100', 'E-mail');
	$errorEmail = $validation->checkEmail($email, $errorEmail);
	$email = $validation->clean($email);
}

if (isset($_POST['phone'])) {
	$errorPhone = null;
	$phone = $_POST['phone'];
	$errorPhone = $validation->checkForEmptyValue($phone, $errorPhone, 'Телефон');
	$errorPhone = $validation->checkTooLongLength ($phone, $errorPhone, '20', 'Телефон');
	$errorPhone = $validation->checkPhone($phone, $errorPhone);
	$phone = $validation->clean($phone);
}

if (isset($_POST['descr'])) {
	$errorDescr = null;
	$descr = $_POST['descr'];
	$errorDescr = $validation->checkTooLongLength ($descr, $errorDescr, '1000', 'Сообщение');
	$descr = $validation->clean($descr);
}

$errorSumm = $errorFio . $errorEmail . $errorPhone . $errorDescr;

if ($errorSumm == null) {
	date_default_timezone_set('Europe/Kiev');
	$dt = date("Y-m-d H:i:s");

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	    $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	    $ip = $_SERVER['REMOTE_ADDR'];
	}
	$ipDb = ip2long($ip);

	$insert_row_query = "
				INSERT INTO mod_feedback(fio,email,phone,descr,dt,ip) 
				VALUES ('$fio','$email','$phone','$descr','$dt','$ipDb') 
				";

	include_once '../model/Database.php';

	$Database = new Database();

	$Database->doQuery($insert_row_query);
	if ($Database) {
		$mailto = "ihor@seotm.com";

		include_once '../app/Mail.php';
		$mail = new Mail($email, $fio, $phone, $phone, $descr, $dt, $ip); 

		if ($mail->send($mailto, "Внесена новая запись")) {
			echo "Ваше сообщение успешно отправлено<br/>";
		}
		else 
		{
			echo "Письмо не отправлено";
		}
	}

}
else
{
	echo $errorSumm;
}


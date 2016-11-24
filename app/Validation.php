<?php

class Validation
{
	public function clean ($prm)
	{
		$prm = trim($prm);
		$prm = strip_tags($prm);
		$prm = htmlspecialchars($prm,ENT_QUOTES);
		$prm = stripslashes($prm);
		$prm = preg_replace("~[^\pL\pN_\-\s\(\)]~u", "", $prm);

		return $prm;
	}

	public function checkEmail ($email, $errorVar)
	{
		if (!preg_match("/^[a-z0-9\-\_]+\@([a-z0-9\-\_]+\.)+[a-z]{2,6}$/i", $email)) {
	        $errorVar .= "Введите корректный e-mail адрес<br>";
		}
		return $errorVar;
	}

	public function checkPhone ($phone, $errorVar)
	{
		if (!preg_match("/^\+380\(\d{2}\)\d{3}-\d{2}-\d{2}$/", $phone)) {
	        $errorVar .= "Введите корректный номер телефона<br>";
		}
		return $errorVar;
	}

	public function checkTooLongLength ($data, $errorVar, $length, $name)
	{
		if (strlen($data)>$length) {
			$errorVar .= "Введите пожалуйста меньше " . $length . " символов в поле \"" . $name ."\"<br>";
		}
		return $errorVar;
	}

	public function checkForEmptyValue($data, $errorVar, $name)
	{
		if (strlen($data)=="0") {
			$errorVar .= 'Поле "' . $name . '" обязательно для заполнения<br>';
		}
		return $errorVar;
	}
}
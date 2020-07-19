<?php
namespace App\Validator;

class LoginValidator
{
  public static function validate($data) {
		$validator = \Validator::make($data, \App\User::$rulesLogin, \App\User::$messages);
		if(!$validator->errors()->isEmpty())
			throw new ValidationException($validator, "Erro na validação do Login");
		return $validator;

	}
}

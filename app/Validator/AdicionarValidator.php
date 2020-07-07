<?php
namespace App\Validator;


class AdicionarValidator
{
  public static function validate($data) {
		$validator = \Validator::make($data, \App\Loja::$rules, \App\Loja::$messages);
		if(!$validator->errors()->isEmpty())
			throw new ValidationException($validator, "Erro na validação do Produto");
		return $validator;

	}
}

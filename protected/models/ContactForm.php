<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class ContactForm extends CFormModel
{
	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name, email, subject, body', 'required','message' => '¡Ups! No puedes dejar este espacio vacío.'),
			// email has to be a valid email address
			array('email', 'email','message'=>"Debes poner una dirección de correo válida para continuar"),
			// verifyCode needs to be entered correctly
			//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
                        'name'=>'Nombre',
                        'email'=>'Correo',
                        'subject'=>'Teléfono',
                        'body'=>'mensaje',
			'verifyCode'=>'Verification Code',
		);
	}
}
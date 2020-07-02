<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Login extends Model
{
    public $email;
    public $password;

    public function rules()
    {
    	return [
    		[['password', 'email'], 'required'],
	    	['email', 'email'],
            ['password', 'validatePassword'],
    	];
    }

    public function validatePassword($attribute, $params)
    {
    	$users = $this->getUser();
        
        if(!$users || ($users->password != sha1($this->password)))
        {
            $this->addError($attribute, 'Invalid email or password');
        }
    }

    public function getUser()
    {
        return Users::findOne(['email' => $this->email]);
    }
}

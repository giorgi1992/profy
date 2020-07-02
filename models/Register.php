<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Register extends Model
{
    public $login;
    public $password;
    public $role;
    public $service_type;
    public $first_name;
    public $last_name;
    public $gender;
    public $birth_date;
    public $phone;
    public $email;
    public $avatar;

    public function rules()
    {
    	return [
    		[['login', 'password', 'first_name', 'last_name', 'birth_date', 'phone', 'email', 'role', 'gender'], 'required'],
	    	['email', 'email'],
            ['service_type', 'integer'],
	    	['login', 'unique', 'targetClass' => 'app\models\Users'],
	    	['email', 'unique', 'targetClass' => 'app\models\Users'],
	    	['login', 'string', 'max' => 20],
	    	['password', 'string', 'min' => 10],
	    	['first_name', 'string', 'max' => 50],
	    	['last_name', 'string', 'max' => 50],
	    	['phone', 'string', 'max' => 13]
    	];
    }

    public function register()
    {
    	$users = new Users;
    	$users->login = $this->login;
	    $users->password = sha1($this->password);
	    $users->role = $this->role;
	    $users->first_name = $this->first_name;
        $users->service_type = $this->service_type;
	    $users->last_name = $this->last_name;
	    $users->gender = $this->gender;
	    $users->birth_date = $this->birth_date;
	    $users->phone = $this->phone;
	    $users->email = $this->email;
	    $users->referral_code = Yii::$app->security->generateRandomString(10);
	    $users->created_at = date('Y-m-d h:i:s');
	    
	    return $users->save();
    }
}

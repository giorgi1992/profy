<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="text-center">
    <h1 class="display-4">Profile</h1>

    <div class="container">
	    <hr class="mb-4">
	    <div class="mb-3">
	        <p>First Name: <?= Yii::$app->user->identity->first_name; ?></p>
	        <p>Last Name: <?= Yii::$app->user->identity->last_name; ?></p>
	        <p>Email: <?= Yii::$app->user->identity->email; ?></p>
	        <p>Phone: <?= Yii::$app->user->identity->phone; ?></p>
	        <p>Referral Code: <?= Yii::$app->user->identity->referral_code; ?></p>
	        <p>Birth Date: <?= Yii::$app->user->identity->birth_date; ?></p>
	    </div>
    </div>
</div>
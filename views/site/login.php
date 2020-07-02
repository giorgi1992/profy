<?php

/* @var $this yii\web\View */
use \yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>

<div class="text-center">
    <h1 class="display-5">Sign In</h1>

    <div class="container">
        <div class="form-row">
            <?php $form = ActiveForm::begin(['class' => 'form-horizontal']) ?>
                <div class="col">
                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false) ?>
                </div>
                <div class="col">
                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false) ?>
                </div>
                
                <div class="col">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
                </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>
</div>

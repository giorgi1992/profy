<?php

/* @var $this yii\web\View */
use \yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;

$this->title = 'My Yii Application';
?>

<div class="text-center">
	<h1 class="display-5">Registration</h1>

	<div class="container">
		<div class="form-row">
			<?php $form = ActiveForm::begin(['class' => 'form-horizontal']) ?>
				<div class="col">
					<?= $form->field($model, 'login')->textInput(['placeholder' => 'Login'])->label(false) ?>
				</div>
				<div class="col">
					<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false) ?>
				</div>
				<div class="col">
					<?= $form->field($model, 'role')->dropDownList(ArrayHelper::map(app\models\Users_role::find()->all(), 'id', 'name'))->label(false) ?>
				</div>
				<div class="col service" style="display: none;">
					<?= $form->field($model, 'service_type')->dropDownList(ArrayHelper::map(app\models\Service_types::find()->all(), 'id', 'name'))->label(false) ?>
				</div>
				<div class="col">
					<?= $form->field($model, 'first_name')->textInput(['placeholder' => 'First Name'])->label(false) ?>
				</div>
				<div class="col">
					<?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Last Name'])->label(false) ?>
				</div>
				<div class="col">
					<?= $form->field($model, 'gender')->dropDownList(ArrayHelper::map(app\models\Gender::find()->all(), 'id', 'name'))->label(false) ?>
				</div>
				<div class="col">
					<?= $form->field($model, 'birth_date')->textInput(['placeholder' => 'Birth Date'])->label(false) ?>
				</div>
				<div class="col">
					<?= $form->field($model, 'phone')->textInput(['value' => '+995'])->label(false) ?>
				</div>
				<div class="col">
					<?= $form->field($model, 'email')->textInput(['placeholder' => 'Email'])->label(false) ?>
				</div>
				
				<div class="col">
					<button class="btn btn-primary btn-lg btn-block" type="submit">Registration</button>
				</div>
			<?php ActiveForm::end() ?>
		</div>
	</div>
</div>

<?php

/* @var $this yii\web\View */
use \yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;

$this->title = 'My Yii Application';
?>

<div class="text-center">
	<h1 class="display-5">Order</h1>

	<div class="container">
		<div class="form-row">
			<?php $form = ActiveForm::begin(['class' => 'form-horizontal']) ?>
				<div class="col">
					<?= $form->field($model, 'service_type')->dropDownList(ArrayHelper::map(app\models\Service::find()->all(), 'id', 'name'))->label(false) ?>
				</div>

				<div class="col">
					<?= $form->field($model, 'tasker_id')->dropDownList(ArrayHelper::map(app\models\Users::find()->where(['role' => 2])->all(), 'id', 'email'))->label(false) ?>
				</div>

				<div class="col">
					<?= $form->field($model, 'date')->textInput(['placeholder' => 'Date'])->label(false) ?>
				</div>
				
				<div class="col">
					<?= $form->field($model, 'time')->textInput(['placeholder' => 'Time Example: 11:50'])->label(false) ?>
				</div>

				<div class="col">
					<?= $form->field($model, 'review')->textarea(['placeholder' => 'Review'])->label(false) ?>
				</div>

				<div class="col">
					<button class="btn btn-primary btn-lg btn-block" type="submit">Order</button>
				</div>
			<?php ActiveForm::end() ?>
		</div>
	</div>
</div>

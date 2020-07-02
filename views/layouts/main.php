<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->registerCsrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom">
    <h5 class="my-0 mr-md-auto font-weight-normal profy">
    	<a href="/">Profy</a>
    </h5>
	<?php
		if(Yii::$app->user->isGuest) {
			echo Nav::widget([
				'items' => [
					['label' => 'Registration', 'url' => ['/site/register']],
					['label' => 'Login', 'url' => ['/site/login']],
				]
			]);
		} else {
			if(Yii::$app->getUser()->identity->role == 1) {
				// Customer
				echo Nav::widget([
					'items' => [
						['label' => 'Order', 'url' => ['/site/order']],
					]
				]);
			} else {
				// Tasker
				echo Nav::widget([
					'items' => [
						['label' => 'Total Earnings', 'url' => ['/site/earnings']],
						['label' => 'My Services', 'url' => ['/site/services']],
						['label' => 'Active Orders', 'url' => ['/site/active']],
						['label' => 'Orders History', 'url' => ['/site/history']],
					]
				]);
			}

			echo Nav::widget([
				'items' => [
				['label' => 'Profile', 'url' => ['/site/profile']],
				'<li>'
		            . Html::beginForm(['/site/logout'], 'post')
		            . Html::submitButton(
		                'Logout',
		                ['class' => 'btn btn-outline-danger']
		            )
		            . Html::endForm()
	            . '</li>'
				]
			]);
		}
	?>
</div>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

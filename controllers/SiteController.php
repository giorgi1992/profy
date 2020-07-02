<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Register;
use app\models\Login;
use app\models\Order;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $model = new Login;

        if(Yii::$app->request->post('Login'))
        {
            $model->attributes = Yii::$app->request->post('Login');

            if($model->validate())
            {
                Yii::$app->user->login($model->getUser());
                return $this->redirect('profile');
            }
        }

        return $this->render('login', ['model' => $model]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays register page.
     *
     * @return Response|string
     */
    public function actionRegister()
    {
        $model = new Register;

        if(Yii::$app->request->post('Register'))
        {
            $model->attributes = Yii::$app->request->post('Register');

            if($model->validate() && $model->register())
            {
                return $this->redirect('login');
            }
        }

        return $this->render('register', ['model' => $model]);
    }

    /**
     * Displays profile page.
     *
     * @return Response|string
     */
    public function actionProfile()
    {
        return $this->render('profile');
    }

    /**
     * Displays order page.
     *
     * @return Response|string
     */
    public function actionOrder()
    {
        $model = new Order;

        if(Yii::$app->request->post('Order'))
        {
            $model->attributes = Yii::$app->request->post('Order');

            if($model->validate() && $model->order())
            {
                return $this->redirect('home');
            }
        }

        return $this->render('order', ['model' => $model]);
    }

    /**
     * Displays earnings page.
     *
     * @return Response|string
     */
    public function actionEarnings()
    {
        return $this->render('earnings');
    }

    /**
     * Displays services page.
     *
     * @return Response|string
     */
    public function actionServices()
    {
        return $this->render('services');
    }

    /**
     * Displays order-history page.
     *
     * @return Response|string
     */
    public function actionHistory()
    {
        return $this->render('orders-history');
    }

    /**
     * Displays active-orders page.
     *
     * @return Response|string
     */
    public function actionActive()
    {
        return $this->render('active-orders');
    }
}

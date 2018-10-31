<?php
namespace api\controllers;

use Yii;
use yii\rest\Controller;
use api\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return text
     */
    public function actionIndex()
    {
        return 'api';
    }
    public function actionLogin()
    {
        $model = new LoginForm();
        $model->load(Yii::$app->request->bodyParams, '');
        if ($token = $model->auth()) {
            return $token;
        } else {
            return $model;
        }
    }
    protected function verbs()
    {
        return [
            'login' => ['post'],
        ];
    }
}

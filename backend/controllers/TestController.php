<?php

namespace backend\controllers;

use backend\models\EmailSenderBy163;
use backend\models\User;
use common\service\Container;
use yii\web\Controller;

/**
 * Site controller
 */
class TestController extends Controller
{
    public function actionTest()
    {
        $container = new Container();
        $container->set('EmailSenderBy163', function ($container,$name = '') {
            return new EmailSenderBy163($name);
        });
        $container->set('User', function ($container, $params = []) {
            return new User($container->get($params[0],$params[1]));
        });
        echo '<pre>';
        print_r($container->get('EmailSenderBy163', ['163']));
        print_r($container->get('User', ['EmailSenderBy163', '163']));
        die;
    }
}

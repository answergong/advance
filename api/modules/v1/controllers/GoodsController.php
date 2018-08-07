<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;

class GoodsController extends ActiveController
{
    public $modelClass = 'api\models\Goods';

    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD','POST'],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}

<?php

namespace frontend\modules\cp;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
 * cp module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'frontend\modules\cp\controllers';
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                ],
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        Yii::$app->viewPath = "@frontend/modules/cp/views";
        // custom initialization code goes here
    }
}

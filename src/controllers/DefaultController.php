<?php

namespace dyonis\yii2\swagger\controllers;

use common\helpers\Url;
use dyonis\yii2\swagger\SwaggerAction;
use Yii;
use yii\web\Controller;
use yii\web\Response;

/**
 * Swagger controller
 */
class DefaultController extends Controller
{
    public $defaultAction = 'ui';

    /** @var \dyonis\yii2\swagger\Module */
    public $module;

    public function actions()
    {
        return [
            'ui' => [
                'class' => SwaggerAction::class,
                'title' => 'Targemy API',
                'restUrl' => Url::to(['api']),
                'configurations' =>[ // todo: move to module config
                    'persistAuthorization' => true,
                    'filter' => true,
                    'tryItOutEnabled' => true,
                    'docExpansion' => 'none',
//                    'defaultModelsExpandDepth' => 2,
//                    'defaultModelExpandDepth' => 2,
                ],
            ],
        ];
    }

    public function actionApi()
    {
        Yii::$app->response->format = Response::FORMAT_RAW;


        // todo: move replacement array to the Module config
        return Yii::$app->cache->getOrSet('swaggerDoc', function()
        {
            $content = file_get_contents($this->module->apiDoc);

            $content = str_replace('{{API_URL}}', env('API_URL'), $content);
            $content = str_replace('{{FRONTEND_URL}}', env('FRONTEND_URL'), $content);

            return $content;

        }, $this->module->cacheDuration);
    }
}

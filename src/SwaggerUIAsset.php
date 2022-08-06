<?php
/*
 * This file is part of the dyonis/yii2-swagger.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace dyonis\yii2\swagger;

use yii\web\AssetBundle;

/**
 * Assets bundle for swagger-ui.
 */
class SwaggerUIAsset extends AssetBundle
{
    public $sourcePath = '@bower/swagger-ui/dist';
    public $baseUrl = '@web';

    public $js = [
        'swagger-ui-bundle.js',
        'swagger-ui-standalone-preset.js',
    ];

    public $css = [
        'swagger-ui.css'
    ];
}

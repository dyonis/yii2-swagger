<?php

use dyonis\yii2\swagger\SwaggerUIAsset;
use yii\helpers\Json;

$bundle = SwaggerUIAsset::register($this);

/** @var string $configurations */
/** @var string $title */
/** @var array $oauthConfiguration */

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style>
        html
        {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }
        *, *:before, *:after
        {
            box-sizing: inherit;
        }

        body {
            margin:0;
            background: #fafafa;
        }

        .response-controls /*, .response-control-media-type*/
        {
            display: none !important;
        }
    </style>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div id="swagger-ui"></div>
<?php $this->endBody() ?>
<script>
    window.onload = function() {
        // Build a system
        window.ui = SwaggerUIBundle(<?= $configurations ?>);
        <?php if ($oauthConfiguration) :?>
        window.ui.initOAuth(<?= Json::encode($oauthConfiguration) ?>);
        <?php endif; ?>
    }
</script>
</body>

</html>
<?php $this->endPage() ?>

<?php
/*
 * This file is part of the dyonis/yii2-swagger.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace dyonis\yii2\swagger;

use Yii;
use yii\base\InvalidConfigException;

class Module extends \yii\base\Module
{
    /** @inheritdoc  */
    public $id = 'swagger';

    /** @var string Path to .yml document */
    public string $apiDoc;

    public int $cacheDuration = 3600;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->checkApiDocFile();
    }

    /**
     * @return void
     * @throws InvalidConfigException
     */
    protected function checkApiDocFile()
    {
        if(!$this->apiDoc)
            throw new InvalidConfigException("The 'apiDoc' property must be set.");

        $this->apiDoc = Yii::getAlias($this->apiDoc);
        $this->apiDoc = realpath($this->apiDoc);

        if(!$this->apiDoc)
            throw new InvalidConfigException("The 'apiDoc' property must be set.");

        if(!file_exists($this->apiDoc))
            throw new InvalidConfigException("File '$this->apiDoc' wasn't found");
    }
}

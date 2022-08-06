<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">OA3 Swagger module for Yii2</h1>
    <br>
</p>

[![version](https://img.shields.io/packagist/v/dyonis/yii2-swagger.svg?style=flat-square)](https://packagist.org/packages/dyonis/yii2-swagger)
[![Download](https://img.shields.io/packagist/dt/dyonis/yii2-swagger.svg?style=flat-square)](https://packagist.org/packages/dyonis/yii2-swagger)
[![Issues](https://img.shields.io/github/issues/dyonis/yii2-swagger.svg?style=flat-square)](https://github.com/dyonis/yii2-swagger/issues)

Integration [swagger-ui](https://github.com/swagger-api/swagger-ui) with Yii2.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist dyonis/yii2-swagger "~1.0" --dev
```

or add

```
"dyonis/yii2-swagger": "~1.0"
```

to the require section of your `composer.json` file.


Usage
-----

Add to your application config:
```
'modules'=>[
    ...
   'swagger'=> [
       'class' => \dyonis\yii2\swagger\Module::class,
       'apiDoc' => '@app/modules/api/v1/doc/swagger.yml',
       'cacheDuration' => 1,
   ],
],
```

[//]: # (Finally)
[//]: # (----)
[//]: # (__If there also some confused, you can refer the [Demo]&#40;https://github.com/lichunqiang/yii2-swagger-demo&#41;.__)


License
-------
![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

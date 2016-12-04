Google Analytics (Measurement Protocol)
=======================================
Google Analytics (Measurement Protocol)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiimaker/yii2-google-analytics "*"
```

or add

```
"yiimaker/yii2-google-analytics": "*"
```

to the require section of your `composer.json` file.


Example
-----
<strong>Initialize</strong>
```php
$analytics = \Yii::createObject([
    'class' => \ymaker\google\analytics\mp\Analytics::className(),
    
    'v' => 1,                                       // Protocol version. Default value: 1
    'tid' => 'UA-XXXX-Y'                            // Tracking ID / Web Property ID
    'cid' => '35009a79-1a05-49d7-b876-2b884d0f825b' // Client ID. Random UUID (http://www.ietf.org/rfc/rfc4122.txt)
]);
```
<strong>Usage</strong>
```php
/** @var yii\httpclient\Response $responce */
$responce = $analytics->send([
    't' => 'event',     // Hit Type.
    'ec' => 'video',    // Event Category.
    'ea' => 'play',     // Event Action.
    'el' => 'holiday',  // Event label.
    'ev' => 300,        // Event value.
]);
```

For more information, refer to the [API official documentation](https://developers.google.com/analytics/devguides/collection/protocol/v1/devguide).
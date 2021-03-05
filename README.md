yii2-qrcode
===========
Qrcode extension for YII2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist silentlun/yii2-qrcode "*"
```

or add

```
"silentlun/yii2-qrcode": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

#### Controller
```php
namespace app\controllers;

use yii\web\Controller;
use silentlun\qrcode\QrCode;

class SiteController extends Controller
{
    public function actionQrcode($code_url)
    {
        return QRcode::png($code_url);
    }
}
```

#### View
```
<?php 
use yii\helpers\Url;
?>
<img src="<?= Url::to(['/site/qrcode','code_url'=>'https://www.yiiframework.com/'])?>" />
```

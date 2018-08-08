yii2-easyinput
==============
yii2-easyinput

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist guopee/yii2-easyinput "*"
```

or add

```
"guopee/yii2-easyinput": "*"
```

to the require section of your `composer.json` file.


Usage
-----
Once the extension is installed, simply use it in your code by  :

```php
<?php
$form->field($this, $key)->widget(
	'guopee\Easyinput',
	[
	    'configs' =>
	        [
	            'initRows' => 1,
	            'columns' => [
	                ['name' => 'target', 'display' => '目标数量', 'type' => 'number'],
	                ['name' => 'money', 'display' => '优惠金额', 'type' => 'number'],
	                ['name' => 'discount', 'display' => '优惠折扣', 'type' => 'number'],
	            ],
	            'initData'=>json_decode($this->$key)
	        ]
	])
?>```
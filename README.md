yii2-appendGrid
==============
yii2 extension based on jquery.appendGrid-1.7.1

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist guopee/yii2-appendgrid "*"
```

or add

```
"guopee/yii2-appendgrid": "*"
```

to the require section of your `composer.json` file.


Usage
-----
Once the extension is installed, simply use it in your code by  :

```php
<?php
$form->field($this, $key)->widget(
	'guopee\appendGrid',
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

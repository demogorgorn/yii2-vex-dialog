yii2-vex-dialog
=====================
Yii2 wrapper for Vex, a modern dialog library (https://github.com/HubSpot/vex) 

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist demogorgorn/yii2-vex-dialog "*"
```

or add

```
"demogorgorn/yii2-vex-dialog": "*"
```

to the require section of your `composer.json` file.


How to use
----------

On your view file.

```php

<?php 
	VexAsset::register($this);
	VexThemeFlatAttackAsset::register($this);
?>


<?php 

	$js = 'function showModal() {
                vex.dialog.buttons.YES.text = "Yes!";
                vex.dialog.buttons.NO.text = "No";
                vex.dialog.confirm({
                  message: "Do you really want to visit Minsk, Belarus?",
                  callback: function(value) {
                    return console.log(value);
                  },
                  className: "vex-theme-flat-attack"
                });

            }';
    $this->registerJs($js);

?>

```

After that just call your function (in this example "showModal").

For example, common use with demogorgorn/yii2-ajax-submit-button (https://github.com/demogorgorn/yii2-ajax-submit-button) :

The same view file: 

```php


<?php 
    \demogorgorn\ajax\AjaxSubmitButton::begin([
        'id' => 'delete-button',
        'label' => Yii::t('modules/payments/common', 'Visit'),
        'ajaxOptions' => [
            'type'=>'POST',
            'url'=> \yii\helpers\Url::toRoute(['/payments/category/count-children']),
            'beforeSend' => new \yii\web\JsExpression('function (xhr) {
	            var idurl = getTreeSelectedItem();

                if (idurl == null) {
                    xhr.abort();
                    showModal();
                }

                this.url = this.url + "&id=" + idurl;
            }'),
            'success' => new \yii\web\JsExpression('function(html){
                showModal();
            }'),
        ],
        'options' => ['class' => 'button large danger', 'type' => 'submit', 'disabled' => true],
    ]);
    \demogorgorn\ajax\AjaxSubmitButton::end();
?>

```

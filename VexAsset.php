<?php

/**
 * @copyright Copyright &copy; Oleg Martemjanov, foreign.by, 2015
 * @package yii2-vex-dialog
 * @version 1.0
 */

namespace demogorgorn\vex;

/**
 * @author Oleg Martemjanov <demogorgorn@gmail.com>
 * @since 1.0
 */
class VexAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/vex/';
    public $js = [ 'js/vex.combined.min.js' ];
	
	public $css = [ 'css/vex.css' ];

	public $depends = [
        'yii\web\JqueryAsset',
    ];
}
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
class VexThemePlainAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@bower/vex/dist/';
	public $css = [ 'css/vex-theme-plain.css' ];
}
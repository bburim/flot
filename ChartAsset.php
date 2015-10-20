<?php
/**
 * @author Bogdan Burim <bgdn2007@ukr.net> 
 */

namespace machour\flot;

use yii\web\AssetBundle;
use yii;

class ChartAsset extends AssetBundle
{

	public function init() {
		Yii::setAlias('@flot', __DIR__);

		return parent::init();
	}

	public $sourcePath = '@flot/assets';

	public $css = [
	];

	public $js = [
		'jquery.flot.js'
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];

}

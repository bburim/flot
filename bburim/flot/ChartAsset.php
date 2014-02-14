<?php
/**
 * @author Bogdan Burim <bgdn2007@ukr.net> 
 */

namespace bburim\flot;

use yii\web\AssetBundle;
use yii;

class ChartAsset extends AssetBundle
{

	public static $extra_js = [];

	public function init() {
		Yii::setAlias('@flot', __DIR__);

		foreach (static::$extra_js as $js_file) {
			$this->js[]= $js_file;
		}

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

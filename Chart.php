<?php
/**
 * @author Bogdan Burim <bgdn2007@ukr.net> 
 */

namespace machour\flot;

use Yii;
use yii\base\Model;
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget as Widget;

class Chart extends Widget
{

	public $options = [];

	public $data = [];

	public $htmlOptions = [];

	public $plugins = [];

	public $excanvas = false;

	private static $loadedPlugins = [];

	/**
	 * @var string the name of the container element that contains the progress bar. Defaults to 'div'.
	 */
	public $tagName = 'div';

	/**
	 * Initializes the widget.
	 * If you override this method, make sure you call the parent implementation first.
	 */
	public function init()
	{
		//checks for the element id
		if (!isset($this->htmlOptions['id'])) {
			$this->htmlOptions['id'] = $this->getId();
		}
		parent::init();
	}

	/**
	 * Renders the widget.
	 */
	public function run()
	{
		$this->registerPlugin();
		echo Html::tag($this->tagName, '', $this->htmlOptions);
	}

	protected function registerPlugin()
	{
		$id   = $this->htmlOptions['id'];
		$view = $this->getView();

		if ($this->excanvas) {
			ChartAsset::$extra_js[] = defined('YII_DEBUG') && YII_DEBUG ? 'excanvas.js' : 'excanvas.min.js';
		}

		$asset = ChartAsset::register($view);

		if ($this->plugins && is_array($this->plugins)) {
			foreach ($this->plugins as $plugin_code) {
				$plugin_jsname = Plugin::getFilename($plugin_code);

				if ($plugin_jsname && !in_array($plugin_jsname, self::$loadedPlugins)) {
					self::$loadedPlugins[] = $plugin_jsname;
					$view->registerJsFile($asset->baseUrl . '/' . $plugin_jsname, ['depends' => ChartAsset::className()]);
				}
			}
		}

		$flotdata    = Json::encode($this->data);
		$flotoptions = Json::encode($this->options);
		$placeholder = "$('#${id}')";

		$js   = [];
		$js[] = "$.plot({$placeholder}, {$flotdata}, {$flotoptions});";
		$view->registerJs(implode("\n", $js),View::POS_READY);
	}
}


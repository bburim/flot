About
====

This is extension for Yii 2.

It is actually a wrapper for jQuery Flot Charts library.

If you want to learn more about Flot options and documentation, please visit http://www.flotcharts.org/


Installation
===

As all Yii 2 Extensions, this one should be installed through Composer too.

Composer can be downloaded here: https://getcomposer.org/

Extension in the list of Composer packages: https://packagist.org/packages/bburim/flot


Installation command:

    php composer.phar require "bburim/flot"


Basic Usage
===

    <?php
  	use bburim\flot\Chart as Chart;
  	use bburim\flot\Plugin as Plugin;
  
  	echo Chart::widget([
  		'data' => [
  			[
  				'label' => 'line', 
  				'data'  => [
  					[1, 1],
  					[2,7],
  					[3,12],
  					[4,32],
  					[5,62],
  					[6,89],
  				],
  				'lines'  => ['show' => true],
  				'points' => ['show' => true],
  			],
  			[
  				'label' => 'bars', 
  				'data'  => [
  					[1,12],
  					[2,16],
  					[3,89],
  					[4,44],
  					[5,38],
  				],
  				'bars' => ['show' => true],
  			],
  		],
  		'options' => [
  			'legend' => [
  				'position'          => 'nw',
  				'show'              => true,
  				'margin'            => 10,
  				'backgroundOpacity' => 0.5
  			],
  		],
  		'htmlOptions' => [
  			'style' => 'width:400px;height:400px;'
  		],
  		'plugins' => [
  			Plugin::CANVAS
  		]
  	]);
    ?>
    
Options and parameters
===

This extension allows you to provide some parameters to configure how your chart will be rendered.

*tagName* - DOM element tag name. Default value is 'div';

*htmlOptions* - HTML options for DOM container.

*options* - options array, which will be converted to JSON and transfered to jQuery as third parameter when calling function to create chart.

*data* - data array,  which will be converted to JSON and transfered to jQuery as second parameter when calling function to create chart.

*excanvas* - true/false. Whether to include `excanvas.js` or not.

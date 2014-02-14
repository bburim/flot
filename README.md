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

Using plugins
===

Sometimes you need to include some Flot plugin to make your Chart more interactive.

The following example shows what needs to be added to include, for example, `jquery.flot.canvas.js` extension:


    <?php
  	use bburim\flot\Chart as Chart;
  	use bburim\flot\Plugin as Plugin;
  
  	echo Chart::widget([
  		'data' => [
        // As before
  		],
  		'options' => [
        // As before
  		],
  		'htmlOptions' => [
        // As before
  		],
  		// Use `plugins` attribute to load required plugins
  		'plugins' => [
  		    // Use helper class with constants to specify plugin type
  			Plugin::CANVAS
  		]
  	]);
    ?>
    
The following plugins are currently available as constants:

`jquery.flot.canvas.js` as Plugin::CANVAS

`jquery.flot.categories.js` as Plugin::CATEGORIES

`jquery.flot.crosshair.js` as Plugin::CROSSHAIR

`jquery.flot.errorbars.js` as Plugin::ERRORBARS

`jquery.flot.fillbetween.js` as Plugin::FILLBETWEEN

`jquery.flot.image.js` as Plugin::IMAGE

`jquery.flot.navigate.js` as Plugin::NAVIGATE

`jquery.flot.pie.js` as Plugin::PIE

`jquery.flot.resize.js` as Plugin::RESIZE

`jquery.flot.selection.js` as Plugin::SELECTION

`jquery.flot.stack.js` as Plugin::STACK

`jquery.flot.symbol.js` as Plugin::SYMBOL

`jquery.flot.threshold.js` as Plugin::THRESHOLD

`jquery.flot.time.js` as Plugin::TIME


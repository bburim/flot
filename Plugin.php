<?php
/**
 * @author Bogdan Burim <bgdn2007@ukr.net> 
 */

namespace machour\flot;

class Plugin
{

	const CANVAS      = 'canvas';
	const CATEGORIES  = 'categories';
	const CROSSHAIR   = 'crosshair';
	const ERRORBARS   = 'errorbars';
	const FILLBETWEEN = 'fillbetween';
	const IMAGE       = 'image';
	const NAVIGATE    = 'navigate';
	const PIE         = 'pie';
	const RESIZE      = 'resize';
	const SELECTION   = 'selection';
	const STACK       = 'stack';
	const SYMBOL      = 'symbol';
	const THRESHOLD   = 'threshold';
	const TIME        = 'time';
	const TOOLTIP     = 'tooltip';

	public static function getFilename($code) {
		if ($code && is_scalar($code)) {
			return "jquery.flot.{$code}.js";
		}
		return false;
	}
}


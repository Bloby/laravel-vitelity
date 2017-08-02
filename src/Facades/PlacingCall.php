<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed callfromclick($number, $servicenumber)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\PlacingCall
 * @see \Vitelity\Facades\PlacingCall
 */
class PlacingCall extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelitypc'; }
}
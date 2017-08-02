<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed cnam($did)
 * @method static mixed npanxxlookup($npa, $nxx)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\TelecomFunctions
 * @see \Vitelity\Facades\TelecomFunctions
 */
class TelecomFunctions extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelitytf'; }
}
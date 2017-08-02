<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed balance()
 * @method static mixed downloadsmssc($startdate = null)
 * @method static mixed didcdrdetail($startdate, $enddate, $did, $type = null)
 * @method static mixed subaccountcdrdetail($startdate, $enddate, $subaccount, $type = null)
 * @method static mixed getcdr($startdate, $enddate, $subaccount = null, $addsub = null)
 * @method static mixed didminutes()
 *
 * @see \Vitelity\Core
 * @see \Vitelity\Billing
 * @see \Vitelity\Facades\Billing
 */
class Billing extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelityb'; }
}
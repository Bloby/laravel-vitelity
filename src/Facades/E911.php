<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed e911send($did, $name, $address, $city, $state, $zip, $unittype = null, $unitnumber = null)
 * @method static mixed e911delete($did)
 * @method static mixed e911checkaddress($address, $city, $state, $zip, $did)
 * @method static mixed e911getinfo($did)
 * @method static mixed e911notifyadd($did, $method, $item)
 * @method static mixed e911notifydelete($did, $method)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\E911
 * @see \Vitelity\Facades\E911
 */
class E911 extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelitye911'; }
}
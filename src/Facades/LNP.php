<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed addport($portnumber, $partial, $wireless, $carrier, $company, $accnumber, $name, $streetnumber, $streetname, $city, $state, $zip, $billnumber, $contactnumber, $endportnumber = null, $additional = null, $ssnpin = null, $streetprefix = null, $streetsuffix = null, $unit = null, $routeto = null, $rateplan = null, $porttype = null)
 * @method static mixed uploadsignature($portid, $filename, $data)
 * @method static mixed uploadbill($portid, $filename, $data)
 * @method static mixed checkavail($did)
 * @method static mixed checkmultiavail($dids)
 * @method static mixed checkstatus($portid)
 * @method static mixed listports($type = null)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\LNP
 * @see \Vitelity\Facades\LNP
 */
class LNP extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelitylnp'; }
}
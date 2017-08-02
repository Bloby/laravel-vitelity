<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed listtollfree($limit = null)
 * @method static mixed listlocal($state, $ratecenter = null, $type = null, $withrates = null, $smsonly = null, $cnam = null, $provider = null, $var = null)
 * @method static mixed listnpanxx($npanxx, $type = null, $withrates = null, $provider = null)
 * @method static mixed listratecenters($state, $type = null, $provider = null)
 * @method static mixed listavailratecenters($state, $type = null, $smsonly = null, $provider = null)
 * @method static mixed searchtoll($did)
 * @method static mixed listavailstates($type = null, $smsonly = null, $provider = null)
 * @method static mixed liststates($type = null, $provider = null)
 * @method static mixed listdids($extra = null)
 * @method static mixed didnote($did, $note)
 * @method static mixed listintlratecenters($country)
 * @method static mixed listintl()
 * @method static mixed getdidnote($did)
 * @method static mixed listspecificlocal($did, $withrates = null, $onaccount = null, $addstate = null)
 * @method static mixed listnpa($npa, $withrates = null, $type = null, $provider = null)
 * @method static mixed lidb($did, $name)
 * @method static mixed lidbavailall()
 * @method static mixed getdidrate($number)
 * @method static mixed listvmdids($vmbox)
 * @method static mixed setvmemail($vmbox, $email)
 * @method static mixed getdidnotes()
 *
 * @see \Vitelity\Core
 * @see \Vitelity\DIDInventory
 * @see \Vitelity\Facades\DIDInventory
 */
class DIDInventory extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelitydidi'; }
}
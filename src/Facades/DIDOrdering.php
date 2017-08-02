<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed getbackorder($backorder_id)
 * @method static mixed gettollfree($did, $routesip = null)
 * @method static mixed getlocaldid($did, $routesip = null, $type = null)
 * @method static mixed removedid($did)
 * @method static mixed requestvanity($did)
 * @method static mixed localbackorder($ratecenter, $state, $returnid = null, $type = null)
 * @method static mixed reservedid($did, $time = null)
 * @method static mixed releasedid($did)
 * @method static mixed getintldid($ratecenter, $country)
 * @method static mixed localbackorderrate($ratecenter, $state)
 * @method static mixed didforcebilling($did, $subacc)
 * @method static mixed listnpas($state)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\DIDOrdering
 * @see \Vitelity\Facades\DIDOrdering
 */
class DIDOrdering extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelitydido'; }
}
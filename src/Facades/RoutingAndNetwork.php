<?php 

namespace Vitelity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed reroute($routesip, $did, $type = null, $updatednis = null)
 * @method static mixed routeall($routesip)
 * @method static mixed getrate($number)
 * @method static mixed subaccounts($subacc, $do = null, $callerid = null)
 * @method static mixed failover($did, $failnum = null)
 * @method static mixed callfw($did, $forward)
 * @method static mixed newvoicemail($mailbox, $newpass, $name, $email, $timezone = null)
 * @method static mixed resetvoicemail($mailbox, $newpass)
 * @method static mixed listvoicemails()
 * @method static mixed addvoicemailtodid($did, $rings, $vmbox)
 * @method static mixed cnamenable($did, $type = null)
 * @method static mixed cnamdisable($did)
 * @method static mixed cnamstatus($did)
 * @method static mixed addsubacc($peer, $secret, $callerid = null)
 * @method static mixed delsubacc($peer)
 * @method static mixed lidbavail($did)
 * @method static mixed lidbcheck($did)
 * @method static mixed remvoicemail($mailbox)
 * @method static mixed migratedids($origsubaccount, $tosubaccount)
 * @method static mixed massreroute($routesip, $dids, $xml = null, $type = null, $updatednis = null)
 * @method static mixed gettfrate()
 * @method static mixed checkfailover($did)
 * @method static mixed showroute($did)
 * @method static mixed intlrates()
 * @method static mixed blocklist($cid, $type = null, $did = null)
 * @method static mixed updatednis($did, $dnis)
 * @method static mixed updatednis1($did)
 * @method static mixed subintl($sub, $action)
 *
 * @see \Vitelity\Core
 * @see \Vitelity\RoutingAndNetwork
 * @see \Vitelity\Facades\RoutingAndNetwork
 */
class RoutingAndNetwork extends Facade {

	/**
	 * Get the registered name of the component
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'vitelityran'; }
}